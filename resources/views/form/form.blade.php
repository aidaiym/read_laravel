@extends('layouts.app')
@section('content')
<main>
    <form class="needs-validation" action="{{ route('form.store') }}" method="post">
        @csrf

        <div class="form-col" style="color: #173D7A;">
            <div class="purpose">
                <h6 class="title mt-4">Для чего будет использоваться данная политика конфиденциальности?</h6>
                <div id="purpose_of_processings" name="purpose_of_processings">
                    @foreach($purpose_of_processings as $purpose_of_processing)
                        <div class="custom-control custom-checkbox" id="purpose_of_processings"
                            name="purpose_of_processings[]">
                            <input value="{{ $purpose_of_processing->id }}" type="checkbox"
                                class="custom-control-input" id="1{{ $purpose_of_processing->id }}"
                                name="purpose_of_processings[]">
                            <label class="custom-control-label" for="1{{ $purpose_of_processing->id }}">
                                {{ $purpose_of_processing->variation }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div>
                <h6 class="title mt-4 ">Какой URL-адрес вашего сайта?</h6>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="validationTooltipURLPrepend"><i
                                class="bi bi-link"></i></span>
                    </div>
                    <input type="text" name="link_personal_data" class="form-control" id="validationTooltipURL"
                        placeholder="https://somesite.com" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                        Please choose a unique and valid username.
                    </div>
                </div>
            </div>
            <div>
                <h6 class="title ">Адрес страницы, на которой расположена политика обработки персональных данных:
                </h6>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="validationTooltipAddressPrepend"><i
                                class="bi bi-link"></i></span>
                    </div>
                    <input type="text" name="link_processing_policy" class="form-control" id="validationTooltipAddress"
                        placeholder="https://somesite.com" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                        Please choose a unique and valid username.
                    </div>
                </div>
            </div>
            <div>
                <h6 class="title ">Как называется ваше мобильное приложение?</h6>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="validationTooltipAppPrepend"><i
                                class="bi bi-link"></i></span>
                    </div>
                    <input type="text" name="project_name" class="form-control" id="validationTooltipApp"
                        placeholder="App" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                        Please choose a unique and valid username.
                    </div>
                </div>
            </div>
            <div>
                <h6 class="title ">ФИО или название организации. </h6>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="validationTooltipNameCompPrepend"><i
                                class="bi bi-link"></i></span>
                    </div>
                    <input type="text" name="full_name" class="form-control" id="validationTooltipNameComp"
                        placeholder="company name" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                        Please choose a unique and valid username.
                    </div>
                </div>
            </div>
            <div>
                <h6 class="title ">Email оператора персональных данных (владельца сайта) для связи.</h6>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="validationTooltipEmailPDPrepend"><i
                                class="bi bi-link"></i></span>
                    </div>
                    <input type="text" name="email" class="form-control" id="validationTooltipEmailPD"
                        placeholder="email" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                        Please choose a unique and valid username.
                    </div>
                </div>
            </div>
            <div>
                <h6 class="title">Перечень собираемых персональных данных: </h6>
                <div id="collected_datas" name="collected_datas">
                    @foreach($collected_datas as $collected_data)
                        <div class="custom-control custom-checkbox" id="collected_datas" name="collected_datas[]">
                            <input value="{{ $collected_data->id }}" type="checkbox" class="custom-control-input"
                                id="2{{ $collected_data->id }}" name="collected_datas[]">
                            <label class="custom-control-label" for="2{{ $collected_data->id }}">
                                {{ $collected_data->variation }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div>
                <h6 class="title mt-3"> Правовыми основаниями обработки персональных данных Держатель/Обработчиком
                    являются:
                </h6>
                <div id="legal_grounds" name="legal_grounds">
                    @foreach($legal_grounds as $legal_ground)
                        <div class="custom-control custom-checkbox" id="legal_grounds" name="legal_grounds[]">
                            <input value="{{ $legal_ground->id }}" type="checkbox" class="custom-control-input"
                                id="3{{ $legal_ground->id }}" name="legal_grounds[]">
                            <label class="custom-control-label" for="3{{ $legal_ground->id }}">
                                {{ $legal_ground->variation }}
                            </label>
                        </div>
                    @endforeach
                    <h6 class="title ">Свой вариант</h6>
                    <div class="input-group mb-4">
                        <input type="text" name='other' class="form-control" placeholder="other...">
                    </div>
                </div>
            </div>
            <div>
                <h6 class="title mt-3"> Держатель/Обработчик обрабатывает персональные данные следующих субъектов
                    персональных данных:
                </h6>
                <div id="subject_of_personal_datas" name="subject_of_personal_datas">
                    @foreach($subject_of_personal_datas as $subject_of_personal_data)
                        <div class="custom-control custom-checkbox" id="subject_of_personal_datas"
                            name="subject_of_personal_datas[]">
                            <input value="{{ $subject_of_personal_data->id }}" type="checkbox"
                                class="custom-control-input" id="4{{ $subject_of_personal_data->id }}"
                                name="subject_of_personal_datas[]">
                            <label class="custom-control-label" for="4{{ $subject_of_personal_data->id }}">
                                {{ $subject_of_personal_data->variation }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div>
                <h6 class="title mt-3"> Обработка персональных данных Держателем/Обработчиком осуществляется
                    следующими
                    способами:
                </h6>
                <div class=" mb-3" id="processing_methods" name="processing_methods"
                    aria-label="Default select example">
                    @foreach($processing_methods as $processing_method)
                        <div class="custom-control custom-radio">
                            <input value="{{ $processing_method->id }}" type="radio"
                                id="5{{ $processing_method->id }}" name="processing_methods[]"
                                class="custom-control-input" checked="true">
                            <label class="custom-control-label"
                                for="5{{ $processing_method->id }}">{{ $processing_method->variation }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div>
                <div>
                    <h6 class="title mt-3"> Будет ли совершатся трансграничная передача персональных данных?</h6>
                    <div>
                        <input type="radio" id="yes" name="example" value="yes" />
                        <label for="yes">yes</label>
                    </div>
                    <div>
                        <input type="radio" id="no" name="example" value="no" />
                        <label for="no">no</label>
                    </div>
                </div>
                <div id="transmission">
                    <div id="countries_list"> </div>
                    <div class="print-element" id="clicked" style="display: none;">
                        <span id="country_val"></span>
                    </div>
                </div>
                <div>
                    <h6 class="title mt-4 ">Введите наименование обработчика/третье лицо</h6>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="validationTooltipURLPrepend"><i
                                    class="bi bi-link"></i></span>
                        </div>
                        <input type="text" name="name_trans" class="form-control" id="name_trans" required>
                    </div>
                </div>
                <div>
                    <div style="color: white;">
                        <h6 class="title mt-4 "> Выберите страну</h6>
                        <select class="form-select col-6 mb-3" id="country" name="country_id">
                            @foreach($countries as $country)
                                <option> {{ $country->name }} value="{{ $country->id }}"</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div>
                    <h6 class="title mt-4 "> Цели передачи персональных данных</h6>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="validationTooltipURLPrepend"><i
                                    class="bi bi-link"></i></span>
                        </div>
                        <input type="text" name="purpose_of_data_transfer" class="form-control"
                            id="purpose_of_data_transfer" required>
                    </div>
                </div>
                <div>
                    <h6 class="title mt-4 "> Введите реквизиты документа на основании которого осуществляется
                        передача персональных данных
                    </h6>

                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="validationTooltipURLPrepend"><i
                                    class="bi bi-link"></i></span>
                        </div>
                        <input type="text" name="document_detail" aria-describedby="document_detail" name="requisites"
                            class="form-control" id="document_detail" required>
                    </div>
                </div>
                <div>
                    <h6 class="title">Перечень передаваемых персональных данных: </h6>
                    <div id="collected_datas" name="collected_datas">
                        @foreach($collected_datas as $collected_data)
                            <div class="custom-control custom-checkbox" id="collected_datas" name="collected_datas[]">
                                <input value="{{ $collected_data->id }}" type="checkbox" class="custom-control-input"
                                    id="6{{ $collected_data->id }}" name="collected_datas[]">
                                <label class="custom-control-label" for="6{{ $collected_data->id }}">
                                    {{ $collected_data->variation }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div>
                    <h6 class="title">Добавить еще страну </h6>
                    <div class="col-1 m-3" style="background-color: #173D7A; color:white; " name="transmission_array"
                        onclick=addDataToLS() id="get_country">+</div>
                    <table class="table table-bordered" id="myTable">
                        <thead>
                            <tr name='transmission_array[]'>
                                <th scope="col">Наименование обработчика/третье лицо </th>
                                <th scope="col">Страна</th>
                                <th scope="col">Реквизиты</th>
                                <th scope="col">Цели</th>
                                <th scope="col">Перечень передаваемых персональных данных</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <button class="btn" style="background-color: #173D7A; color:white" type="submit">Генерировать</button>s
    </form>
</main>
@endsection
