@extends('layouts.app')

@section('content')
<section class="container">
    <div class="row" style="margin-top:6%;">
        <section class="col-sm-12 col-md-12 col-lg-12">
            <section class="container-with-large-icon login-form">
                <div class="wrap">
                    <h3 class="text-center">Company Details</h3>
                    
                    <div class="line" style="border-top: 3px solid #40adbf;text-align: center;margin: 0 auto;margin-bottom:15px;"></div>
                    <div class="row" style="margin-left:0px;margin-right:0px;">

                        <div action="#" id="form-returning">

                            <div class="form-border" style="border:1px solid #ddd;padding:20px;margin-top:10px;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Company name/Business name</label>
                                            <input type="text" class="form-control" id="name1" readonly value="SHIROMANI MART">
                                            <span style="color:red" id="nameerror1"></span>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="number">Company Mobile number</label>
                                            <input type="text" class="form-control" id="mobile1" readonly value="7208135351" maxlength="10" onkeypress="return isNumber(event)">
                                            <span style="color:red" id="mobileerror1"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Type of Company</label>
                                            <input type="text" class="form-control" id="name1" readonly value="PartnershipFirm">
                                            <span style="color:red" id="nameerror1"></span>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="number">Type of Seller</label>
                                            <input type="text" class="form-control" id="mobile1" readonly value="Manufacture" maxlength="10" onkeypress="return isNumber(event)">
                                            <span style="color:red" id="mobileerror1"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="number">City</label>
                                            <input type="text" class="form-control" id="name1" readonly value="Hyderabad">
                                            <span style="color:red" id="cityerror"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="number">State</label>
                                            <input type="text" class="form-control" id="name1" readonly value="Telangana">
                                            <span style="color:red" id="stateerror"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="number">Country</label>
                                            <input type="text" class="form-control" id="name1" readonly value="India">
                                            <span style="color:red" id="countryerror"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="number">Pin Code</label>
                                            <input type="text" class="form-control" id="pincode" value="500006" name="PinCode" maxlength="6" readonly onkeypress="return isNumber(event)">
                                            <span style="color:red" id="pinerror"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="Address">Address</label>
                                            <textarea class="form-control" rows="4" id="address1" readonly>Attapur</textarea>
                                            <span style="color:red" id="addresserror1"></span>
                                        </div>
                                    </div>
                                </div>
                                <div><span style="color:green" id="successerror1"></span></div>

                                <div class="row" style="text-align:center;">
                                </div>
                            </div>

                            <div class="form-border" style="border:1px solid #ddd;padding:20px;margin-top:10px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="number">PAN number</label>
                                                <input type="text" class="form-control" id="pannumber1" value="1221" readonly>
                                                <span style="color:red" id="panerror1"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="col-md-3 col-sm-3" style="margin-top:5px;">
                                                    <img src="http://api.shiromanimart.com/UserProofImage/IMG_20171229_0948461.jpg" alt="" width="100%;">

                                                </div>
                                                <div class="col-md-3 col-sm-3" style="margin-top:5px;">
                                                    <img src="http://api.shiromanimart.com/UserProofImage/" alt="" width="100%;">

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div><span style="color:green" id="pansuccess1"></span></div>
                                </div>
                            </div>

                            <div class="form-border" style="border:1px solid #ddd;padding:20px;margin-top:10px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="number">GST number</label>
                                                <input type="text" class="form-control" id="gstnumber1" value="AAAAA1222A" readonly>
                                                <span style="color:red" id="gsterror1"></span>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="col-md-3 col-sm-3" style="margin-top:5px;">
                                                    <img src="http://api.shiromanimart.com/UserProofImage/1515222710576-1824780506.jpg" alt="" width="100%;">

                                                </div>
                                                <div class="col-md-3 col-sm-3" style="margin-top:5px;">
                                                    <img src="http://api.shiromanimart.com/UserProofImage/" alt="" width="100%;">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div><span style="color:green" id="gstsuccess1"></span></div>
                                </div>
                            </div>

                            <div class="form-border" style="border:1px solid #ddd;padding:20px;margin-top:10px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="number">ROC number</label>
                                                <input type="text" class="form-control" id="rocnumber1" value="AAAAA" readonly>
                                                <span style="color:red" id="rocerror1"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="col-md-3 col-sm-3" style="margin-top:5px;">
                                                    <img src="http://api.shiromanimart.com/UserProofImage/IMG_20171215_1309231.jpg" alt="" width="100%;">

                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                    <img src="http://api.shiromanimart.com/UserProofImage/" alt="" width="100%;" style="margin-top:5px;">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div><span style="color:green" id="rocsuccess1"></span></div>
                                </div>
                            </div>


                            <div class="form-border" style="border:1px solid #ddd;padding:20px;margin-top:10px;">
                                <div class="row">
                                    <h3 class="text-center">Edit Pickup Address</h3>
<form action="/Home/EditSellerdetails" method="post">                                        <input type="hidden" value="4" name="sellerid" />
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label mb-10 text-left">Pickup Address</label>
                                                    <textarea class="form-control" rows="3" id="address2" name="PickupAddress">Attapur</textarea>
                                                    <span style="color:red" id="addresserror2"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group mt-30 mb-30">
                                                    <label class="control-label mb-10 text-left">Company Email ID</label>
                                                    <input type="email" class="form-control" id="email1" name="CompanyEmail" value="shiromanimart@gmail.com">
                                                    <span style="color:red" id="emailerror1"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mt-30 mb-30">
                                                    <label class="control-label mb-10 text-left">Company Mobile number</label>
                                                    <input type="text" class="form-control" id="ShopMobile" name="ShopMobile" value="7208135351" maxlength="10" onkeypress="return isNumber(event)">
                                                    <span style="color:red" id="mobileerror1"></span>
                                                </div>

                                            </div>
                                        </div>
                                        <div><span style="color:green" id="editsaveerror"></span></div>
                                        <div style="text-align: center">
                                            <button type="submit" id="btnshopdetails1" class="btn btn-mega" style="background: #40adbf">Save</button>
                                        </div>
</form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </section>

    </div>
</section>
@endsection
