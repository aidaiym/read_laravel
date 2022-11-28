<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Collected_data;
use App\Models\Form_collected_data; 
use App\Models\Legal_ground;
use App\Models\Purpose_of_processing;
use App\Models\Type_of_project; 
use App\Models\Transfer_of_data; 
use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;


class StoreController extends BaseController
{
  public function __invoke(StoreRequest $request, Form $form, Transfer_of_data $transfer_of_data){
    $data = $request ->validated();
    dd($data);
    $other=Legal_ground::firstOrCreate($data['other']);
    //$this->service->store($data);
    $processing_methods=$data['processing_methods'];
    $legal_grounds=$data['legal_grounds'];
    $legal_grounds=$legal_grounds+$other;
    $subject_of_personal_datas=$data['subject_of_personal_datas'];
    $collected_datas=$data['collected_datas'];
    $purpose_of_processings=$data['purpose_of_processings'];
    $transfer_of_datas=$data['transfer_of_datas'];
    $country = $data['country_id'];
    $transfer_collected_datas = $data['transfer_collected_datas'];
    $document_details = $data['document_details'];
    unset($data['collected_datas']);
    unset($data['purpose_of_processings']);
    unset($data['processing_methods']);
    unset($data['legal_grounds']);
    unset($data['subject_of_personal_datas']);
    unset($data['transfer_of_data']);
    unset($data['transfer_collected_datas']);
/*
    unset($transfer_of_data['collected_datas']);
    unset($transfer_of_data['document_details']);
    unset($transfer_of_data['countries']);
*/
    // $transfer_of_data=Transfer_of_data::firstOrCreate($transfer_of_data);
    $form=Form::firstOrCreate($data);

    $form->collected_datas()->attach($collected_datas);
    $form->purpose_of_processings()->attach($purpose_of_processings);
    $form->legal_grounds()->attach($legal_grounds);
    $form->subject_of_personal_datas()->attach($subject_of_personal_datas);
    $form->processing_methods()->attach($processing_methods);
    
    // $form->collected_datas()->attach($transfer_collected_datas);

    // $form->transfer_of_datas()->attach($transfer_of_datas);
/*
    $transfer_of_data->collected_datas()->attach($transfer_collected_datas);
    $transfer_of_data->document_details()->attach($document_details);
    $transfer_of_data->countries()->attach($countries);
    */
    return redirect()->route('download_view.download', $form->id);

  }
}