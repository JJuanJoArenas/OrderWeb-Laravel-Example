<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Causal;
use App\Models\Observation;
use App\Models\Order;
use App\Models\Technician;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class ReportController extends Controller
{
    public function index()
    {
        $technicians = Technician::all();
        return view('reports.index', compact('technicians'));
    }

    /**
     * Report that generates the list of every technicians
     */
    public function export_technicians()
    {
        $technicians = Technician::all();
        $data = array(
            'technicians' => $technicians
        );

        /**
         * dompdf version 3.x
         * se debe agregar setOptions
         */

        $pdf = Pdf::loadView('reports.export_technicians', $data)
                ->setPaper('letter', 'portrait')
                ->setOptions([
                'defaultFont' => 'sans-serif',
                'isRemoteEnabled' => true]); //landscape: horizontal
        return $pdf->download('technicians.pdf');
    }

    /**
     * Reporte que genera el listado de actividades de un tecnico
     */

    public function export_activities_by_technician(Request $request)
    {
        $activities = Activity::where('technician_id', $request['technician_id'])->get();

        $data = array(
            'activities' => $activities
        );

        /**
         * dompdf version 3.x
         * se debe agregar setOptions
         */

        $pdf = Pdf::loadView('reports.export_activities_by_technician', $data)
                ->setPaper('letter', 'portrait')
                ->setOptions([
                'defaultFont' => 'sans-serif',
                'isRemoteEnabled' => true]); //landscape: horizontal
        return $pdf->download('ActivitiesByTechnician-'.$request['technician_id'].'.pdf');
    }

    public function export_orders_by_date(Request $request)
    {
        $orders = Order::whereBetween('legalization_date',['legalization_date_start', 'legalization_date_end']);
        $causals = Causal::where('description', $request['causal_id']);
        $observations = Observation::where('observation_id', '=', $request['observation_description']);

        $data = array(
            'order' => $orders,
            'causal' => $causals,
            'observation' => $observations
        );

        /**
         * dompdf version 3.x
         * se debe agregar setOptions
         */

        $pdf = Pdf::loadView('reports.export_orders_by_date', $data)
                ->setPaper('letter', 'portrait')
                ->setOptions([
                'defaultFont' => 'sans-serif',
                'isRemoteEnabled' => true]); //landscape: horizontal
        return $pdf->download('OrdersByDate-'.$request['order'].'.pdf');
    }
}
