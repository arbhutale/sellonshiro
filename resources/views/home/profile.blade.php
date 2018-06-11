@extends('layouts.app')

@section('content')
<section class="panel panel-default card-view pa-0">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-wrap">
                        <h3 class="headingline">My Profile</h3>
                        <div class="col-sm-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label mb-10 text-left">First Name</label>
                                    <input type="text" class="form-control" id="firstname" name="FirstName" readonly value="Himanshu">
                                    <div class=""><span style="color:red" id="nameerror"></span></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label mb-10 text-left" for="example-email">Last Name </label>
                                    <input type="text" class="form-control" id="lastname" name="LastName" readonly value="Jain">
                                    <span style="color:red" id="lasterror"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label mb-10 text-left">Email</label>
                                    <input type="text" class="form-control" id="email" name="Email" readonly value="erhimanshu.jain520@gmail.com">
                                    <span style="color:red" id="emailerror"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label mb-10 text-left">Mobile</label>
                                    <input type="text" class="form-control" id="mobile" name="Mobile" readonly value="7830233408" maxlength="10" onkeypress="return isNumber(event)">
                                    <span style="color:red" id="mobileerror"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12" style="padding-left: 30px;
    padding-right: 30px;">
                            <div class="form-group">
                                <label class="control-label mb-10 text-left">Address</label>
                                <textarea class="form-control" rows="3" id="address" readonly name="Address">29 B Veer Nagar
Dayal Bagh</textarea>
                                <span style="color:red" id="addresserror"></span>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label mb-10 text-left">PinCode</label>
                                    <input type="text" class="form-control" id="pincode" readonly name="PinCode" value="282005" maxlength="6" onkeypress="return isNumber(event)">
                                    <span style="color:red" id="pinerror"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label mb-10 text-left">City</label>
                                    <input type="text" class="form-control" id="citiess" readonly name="CityName" value="Agra">
                                    <span style="color:red" id="cityerror"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label mb-10 text-left">State</label>
                                    <input type="text" class="form-control" id="states" readonly name="StateName" value="Uttar Pradesh ">
                                    <span style="color:red" id="stateerror"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label mb-10 text-left">Country</label>
                                    <input type="text" class="form-control" id="country" readonly name="CountryName" value="India">
                                    <span style="color:red" id="stateerror"></span>
                                </div>
                            </div>

                        </div>

                        


                    </div>

                </div>
            </div>



        </section>
        @endsection