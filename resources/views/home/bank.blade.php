@extends('layouts.app')

@section('content')
<section class="panel panel-default card-view pa-0">
            <div class="row">
                <div class="col-sm-12">
<form action="/Home/BankDetails" method="post">                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-wrap">
                                    <h3 class="headingline">Bank Details</h3>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10 text-left">Account Name</label>
                                            <input type="text" class="form-control" id="holdername" name="Holder_Name" value="Mohan ">
                                            <div class=""><span style="color:red" id="holdererror"></span></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10 text-left">Account Number</label>
                                            <input type="text" class="form-control" id="accountnumber" name="Account_Number" value="101001011012010" onkeypress="return isNumber(event)" maxlength="16">
                                            <span style="color:red" id="numbererror"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10 text-left">Bank Name</label>
                                            <input type="text" class="form-control" id="bankname" name="Bank_Name" value="ICICI">
                                            <span style="color:red" id="bankerror"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10 text-left">Branch Name</label>
                                            <input type="text" class="form-control" id="branchname" name="Branch_Name" value="Attapur">
                                            <span style="color:red" id="brancherror"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10 text-left">IFSC Code</label>
                                            <input type="text" class="form-control" id="ifsccode" name="IFSC_Code" value="ICICI00098" maxlength="11">
                                            <span style="color:red" id="ifscerror"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label mb-10 text-left">Bank Address</label>
                                            <textarea class="form-control" rows="3" id="bankaddress" name="Bank_Address">Test</textarea>
                                            <span style="color:red" id="bankaddresserror"></span>
                                        </div>
                                        <div><span style="color:green" id="overallsuccess"></span></div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="skip" style="margin-top: 20px;text-align: center;margin-left:-56px;">
                                                    <button type="submit" id="btnbanksubmit" style="font-size: 20px;color: #ffffff;border:0;text-align: center;
background: #40adbf;padding: 5px 20px;margin-bottom: 18px;">
                                                        Save
                                                    </button>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
</form>
                </div>
            </div>



        </section>
@endsection