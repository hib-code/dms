<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\DeviceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $devices = Device::with(['type', 'vendor'])->orderBy('hostname')->paginate(12);
        if ($devices->isEmpty()) {
            // Liste fictive si la base est vide
            $devices = collect([
                (object)[
                    'id' => 1,
                    'hostname' => 'DESKTOP-GG0Q2AP',
                    'display_name' => 'DESKTOP-GG0Q2AP',
                    'ip_address' => '192.168.1.112',
                    'type_id' => 1,
                    'type' => (object)['type' => 'server', 'font_icon' => 'fa-shield-check'],
                    'vendor' => (object)['enterprise_name' => 'DESKTOP-GG0Q2AP'],
                    'vendor_id' => 12356,
                ],
                
            ]);
        }
        return view('zen.device.index', [
            'devices' => $devices
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Device $device
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function show(Device $device = null)
    {
        if (!$device || !$device->id) {
            // Device fictif si non trouvé
            $device = (object)[
                'id' => 1,
                'hostname' => 'FWF-51E',
                'display_name' => 'FWF-51E',
                'ip_address' => '192.168.10.254',
                'type' => (object)['type' => 'Firewall', 'font_icon' => 'fa-shield-check'],
                'vendor' => (object)['enterprise_name' => 'Fortinet'],
                'vendor_id' => 12356,
                'interfaces_count' => 0,
                'snmpDetails' => collect([]),
            ];
        }
        $data = [
            'device'       => $device,
            'snmp_details' => $device->snmpDetails ?? collect([]),
            'interfaces'   => (object) [
                'up'      => 0,
                'down'    => 0,
                'unknown' => 0,
            ],
        ];

        if ($device->interfaces_count > 0) {
            $data['interfaces'] = (object) [
                'up'      => $device->interfaces()->interfaceStatusUp()->count(),
                'down'    => $device->interfaces()->interfaceStatusDown()->count(),
                'unknown' => $device->interfaces()->interfaceStatusUnknown()->count(),
            ];

            $data['types'] = DB::table('device_interfaces')
                ->join('interface_type_definitions', 'device_interfaces.type_id', '=', 'interface_type_definitions.id')
                ->select(DB::raw('count(*) as value, interface_type_definitions.type as name'))
                ->where('device_interfaces.device_id', '=', $device->id)
                ->groupBy('interface_type_definitions.type')
                ->get();
        }

        return view('zen.device.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $device = Device::with([
            'icmpSettings',
            'snmpSettings',
        ])
        ->findOrFail($id);

        return view('zen.device.edit', $device);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
