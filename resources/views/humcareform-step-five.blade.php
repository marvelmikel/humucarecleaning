@extends('layout.form')

@section('content')
@include('partials.notify')
<div class="page-wrapper">
        <div class="content container-fluid">
        <div class="card">
        <div class="row">
                <div class="col-lg-12">
                    <div class="card-header">
                                    <h4 class="card-title mb-0">Attachments </h4>
                                </div>
                                <div class="card-body">
                                <form action="humcareform-step-five"  method ="post" enctype="multipart/form-data"> 
                                    @csrf
                                <div class="form-group row">
                                     <label class="col-form-label col-lg-2">Passport/UK Birth Certificate/Driver's License </label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="file" class="form-control" name ="passportBirth">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Proof of right to work in UK </label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="file" class="form-control" name ="proofOfWork">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Proof of Address (eg. utility bill- within the last three months) </label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="file" class="form-control" name="proofOfAddress">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Original certificates/diplomas/QCF Qualifications </label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="file" class="form-control" name="originalCertificate">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Certificate of training received in Domiciliary care </label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="file" class="form-control" name ="certificateTraining">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Passport photograph </label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="file" class="form-control" name="passportPhoto">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Bank/Building Society details </label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="file" class="form-control" name="bankSocietyDetails">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">DBS Certificate </label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="file" class="form-control" name ="dbsCertificate">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">National Insurance card/P45/P60</label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="file" class="form-control" name ="nationalInsurance">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Current Curriculum Vitae (CV) </label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="file" class="form-control" name ="curriculumVitae">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                        <button type="submit" class="btn btn-lg btn-primary text-right">Submit</button>
                                        </div>
                                        </form>

                                </div>
                                    </div>
                                </div>
                                </div>
                                </div>
                            </div>
@endsection