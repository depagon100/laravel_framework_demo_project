<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Acno;
use App\Models\Aircon;
use App\Models\Ccoreg;
use App\Models\Cncno;
use App\Models\Denrid;
use App\Models\Dpno;
use App\Models\Gic;

use App\Models\Import;
use App\Models\Operation;
use App\Models\Permmit;
use App\Models\Piccs;
use App\Models\Pmpin;
use App\Models\Pono;
use App\Models\Priority;
use App\Models\Production;
use App\Models\Smallquan;
use App\Models\TraineeID;
use App\Models\TransporterReg;
use App\Models\Tsdreg;
use App\Models\Upload;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;
use Illuminate\Support\Carbon;

class ModuleOneController extends Controller
{
    public function index(){

        $aircon = Aircon::find(1);
        $dpno = Dpno::all();
        $gic = Gic::all();
        $acno = Acno::all();
        $dpno = Dpno::all();
        $cncno = Cncno::all();
        $denrid = Denrid::all();
        $transporterReg = TransporterReg::all();
        $tsdreg = Tsdreg::all();
        $ccoreg = Ccoreg::all();
        $import = Import::all();
        $permit = Permmit::all();
        $smallquan = Smallquan::all();
        $priority = Priority::all();
        $piccs = Piccs::all();
        $pmpin = Pmpin::all();
        $pono = Pono::all();
        $operation = Operation::all();
        $production = Production::all();
        $trainee_id = TraineeID::all();
        $upload = Upload::all();

        return view('module.moduleOne')
            ->with(['aircon'=>$aircon,'dpno'=>$dpno,'gic'=>$gic, 'acno'=> $acno,'dpno'=>$dpno,'cncno'=>$cncno,'denrid'=>$denrid,
                'transporterReg'=>$transporterReg,'tsdreg'=>$tsdreg,'ccoreg'=>$ccoreg,'import'=>$import,'permit'=>$permit,'smallquan'=>$smallquan,
                'priority'=>$priority,'piccs'=>$piccs,'pmpin'=>$pmpin,'pono'=>$pono,'operation'=>$operation,'production'=>$production,'traineeid'=>$trainee_id,'uploads'=>$upload
            ]);

    }

    public function create()
    {
        return view('module.moduleOne');
    }

    public function save(Request $request ){

        $gic = new Gic();
        $gic->username = Auth::user()->username;
        $gic->description = $request->input('description');
        $gic->save();

        $aircon  = new Aircon();
        $aircon->username = Auth::user()->username;
        $aircon->traineeID = $request->input('traineeID');
        $aircon->permit = $request->input('ACPermit');
        $aircon->dateIssued = $request->input('ACIssued');
        $aircon->dateExpired = $request->input('ACExpire');
        $aircon->save();


        $denrid  = new Denrid();
        $denrid->username = Auth::user()->username;
        $denrid->traineeID = $request->input('traineeID');
        $denrid->permit = $request->input('DENRpermit');
        $denrid->dateIssued = $request->input('DENRdateIssued');
        $denrid->dateExpired = $request->input('DENRdateExpired');
        $denrid->save();

        $transporterReg  = new TransporterReg();
        $transporterReg->username = Auth::user()->username;
        $transporterReg->traineeID = $request->input('traineeID');
        $transporterReg->permit = $request->input('Transportpermit');
        $transporterReg->dateIssued = $request->input('TransportdateIssued');
        $transporterReg->dateExpired = $request->input('TransportdateExpired');
        $transporterReg->save();

        $tsdreg  = new Tsdreg();
        $tsdreg->username = Auth::user()->username;
        $tsdreg->traineeID = $request->input('traineeID');
        $tsdreg->permit = $request->input('TSDpermit');
        $tsdreg->dateIssued = $request->input('TSDdateIssued');
        $tsdreg->dateExpired = $request->input('TSDdateExpired');
        $tsdreg->save();

        $acno  = new Acno();
        $acno->username = Auth::user()->username;
        $acno->traineeID = $request->input('traineeID');
        $acno->permit = $request->input('ACNOPermit');
        $acno->dateIssued = $request->input('ACNOIssued');
        $acno->dateExpired = $request->input('ACNOExpired');
        $acno->save();

        $operation  = new Operation();
        $operation->username = Auth::user()->username;
        $operation->traineeID = $request->input('traineeID');
        $operation->aveOPhours = $request->input('aveOPhours');
        $operation->aveOPdays = $request->input('aveOPdays');
        $operation->aveOPshift = $request->input('aveOPshift');
        $operation->maxOPhours = $request->input('maxOPhours');
        $operation->maxOPdays = $request->input('maxOPdays');
        $operation->maxOPshift = $request->input('maxOPshift');
        $operation->save();

        $production  = new Production();
        $production->username = Auth::user()->username;
        $production->aveProduction = $request->input('aveProduction');
        $production->totalOutput = $request->input('totalOutput');
        $production->totalConsumption = $request->input('totalConsumption');
        $production->totalElectric = $request->input('totalElectric');
        $production->save();


        $dpno = $request->input('dpno');
        for ($x=0; $x<count($dpno); $x+=3){
            $DBdpno = new Dpno();
            $DBdpno->traineeID = 1;
            $DBdpno->username = Auth::user()->username;
            $DBdpno->permit = $dpno[$x];
            $DBdpno->dateIssued = $dpno[$x+1];
            $DBdpno->dateExpired = $dpno[$x+2];
            $DBdpno->save();
        }

        $cncno = $request->input('cncno');
        for ($x=0; $x<count($cncno); $x+=3){
            $DBcncno = new Cncno();
            $DBcncno->traineeID = 1;
            $DBcncno->username = Auth::user()->username;
            $DBcncno->permit = $cncno[$x];
            $DBcncno->dateIssued = $cncno[$x+1];
            $DBcncno->dateExpired = $cncno[$x+2];
            $DBcncno->save();
        }


        $ccoreg = $request->input('ccoreg');
        for ($x=0; $x<count($ccoreg); $x+=3){
            $DBccoreg = new Ccoreg();
            $DBccoreg->username = Auth::user()->username;
            $DBccoreg->traineeID = 1;
            $DBccoreg->permit = $ccoreg[$x];
            $DBccoreg->dateIssued = $ccoreg[$x+1];
            $DBccoreg->dateExpired = $ccoreg[$x+2];
            $DBccoreg->save();

        }

        $import = $request->input('import');
        for ($x=0; $x<count($import); $x+=3){
            $DBimport = new Import();
            $DBimport->username = Auth::user()->username;
            $DBimport->traineeID = 1;
            $DBimport->permit = $import[$x];
            $DBimport->dateIssued = $import[$x+1];
            $DBimport->dateExpired = $import[$x+2];
            $DBimport->save();
        }

        $permit = $request->input('permit');
        for ($x=0; $x<count($permit); $x+=3){
            $DBpermit = new Permmit();
            $DBpermit->username = Auth::user()->username;
            $DBpermit->traineeID = 1;
            $DBpermit->permit = $permit[$x];
            $DBpermit->dateIssued = $permit[$x+1];
            $DBpermit->dateExpired = $permit[$x+2];
            $DBpermit->save();

        }

        $smallquan = $request->input('smallquan');
        for ($x=0; $x<count($permit); $x+=3){
            $DBsmallquan = new Smallquan();
            $DBsmallquan->username = Auth::user()->username;
            $DBsmallquan->traineeID = 1;
            $DBsmallquan->permit = $smallquan[$x];
            $DBsmallquan->dateIssued = $smallquan[$x+1];
            $DBsmallquan->dateExpired = $smallquan[$x+2];
            $DBsmallquan->save();

        }
        $priority = $request->input('priority');
        for ($x=0; $x<count($priority); $x+=3){
            $DBpriority = new Priority();
            $DBpriority->username = Auth::user()->username;
            $DBpriority->traineeID = 1;
            $DBpriority->permit = $priority[$x];
            $DBpriority->dateIssued = $priority[$x+1];
            $DBpriority->dateExpired = $priority[$x+2];
            $DBpriority->save();

        }

        $piccs = $request->input('piccs');
        for ($x=0; $x<count($piccs); $x+=3){
            $DBpiccs = new Piccs();
            $DBpiccs->username = Auth::user()->username;
            $DBpiccs->traineeID = 1;
            $DBpiccs->permit = $piccs[$x];
            $DBpiccs->dateIssued = $piccs[$x+1];
            $DBpiccs->dateExpired = $piccs[$x+2];
            $DBpiccs->save();

        }

        $pmpin = $request->input('pmpin');
        for ($x=0; $x<count($pmpin); $x+=3){
            $DBpmpin = new Pmpin();
            $DBpmpin->username = Auth::user()->username;
            $DBpmpin->traineeID = 1;
            $DBpmpin->permit = $pmpin[$x];
            $DBpmpin->dateIssued = $pmpin[$x+1];
            $DBpmpin->dateExpired = $pmpin[$x+2];
            $DBpmpin->save();

        }

        $pono = $request->input('pono');
        for ($x=0; $x<count($pono); $x+=3){
            $DBpono = new Pono();
            $DBpono->username = Auth::user()->username;
            $DBpono->traineeID = 1;
            $DBpono->permit = $pono[$x];
            $DBpono->dateIssued = $pono[$x+1];
            $DBpono->dateExpired = $pono[$x+2];
            $DBpono->save();

        }

        if($file = $request->file('file')){
            $name = $file->getClientOriginalName();
            if($file->move('docs', $name)){

                $upload = new Upload();
                $upload->file = $name;
                $upload->save();

            };
        }
        return redirect('moduleTwo');


    }

    public function generate(){

        $trainee_id = Helper::IDGenerator(new TraineeID, 'traineeID', 5 , 'DENR');

        $data = new TraineeID;
        $data->traineeID = $trainee_id;

        $data->save();



        return redirect('module.moduleOne');
    }

    public function pdf(){

        $aircon = Aircon::get();
        $gic = Gic::get();
        $dpno = Dpno::get();
        $cncno = Cncno::get();
        $denrid = Denrid::get();
        $transporterReg = TransporterReg::get();
        $tsdreg = Tsdreg::get();
        $ccoreg = Ccoreg::get();
        $import = Import::get();
        $permit = Permmit::get();
        $smallquan = Smallquan::get();
        $priority = Priority::get();
        $piccs = Piccs::get();
        $pmpin = Pmpin::get();
        $acno = Acno::get();
        $pono =Pono::get();
        $operation = Operation::get();
        $production =Production::get();
        $pdf = PDF::loadView('module.pdf1' , ['gic'=>$gic,'aircon'=>$aircon,'dpno'=>$dpno,'cncno'=>$cncno,'denrid'=>$denrid,
            'transporterReg'=>$transporterReg,'tsdreg'=>$tsdreg,'ccoreg'=>$ccoreg,'import'=>$import,'permit'=>$permit,'smallquan'=>$smallquan,
            'priority'=>$priority,'piccs'=>$piccs,'pmpin'=>$pmpin,'acno'=>$acno,'pono'=>$pono,'operation'=>$operation,'production'=>$production

        ]);

        return $pdf->download('moduleOne.pdf1');
    }

    public function store(Request $request)
    {
        $dateIssued = $request->input('date_issued');
        $expiryDate = $request->input('expiry_date');

        if (empty($dateIssued)) {
            $dateIssued = Carbon::parse('2001-01-01');
        } else {
            $dateIssued = Carbon::createFromFormat('Y-m-d', $dateIssued);
        }

        if (empty($expiryDate)) {
            $expiryDate = null;
        } else {
            $expiryDate = Carbon::createFromFormat('Y-m-d', $expiryDate);
        }

        // Add a limit of 30 days after the date issued
        $limitDate = $dateIssued->copy()->addDays();

        if ($expiryDate && $expiryDate->gt($limitDate)) {
            return back()->withErrors(['expiry_date' => 'Expiry date cannot go beyond 30 days after the date issued']);
        }

        if ($dateIssued->gt($expiryDate)) {
            return back()->withErrors(['date_issued' => 'Date issued cannot go beyond the expiry date']);
        }

        // Save to the database
        $item = new Item;
        $item->date_issued = $dateIssued;
        $item->expiry_date = $expiryDate;
        $item->save();

        return redirect()->route('moduleTwo');
    }

}
