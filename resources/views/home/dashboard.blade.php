@extends('layouts.app')

@section('content')
<div class="row" style="margin-top: 10px;">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-default card-view pa-0">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pa-0">
                            <div class="sm-data-box bg-red">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                            <span class="txt-light block counter"><span class="counter-anim">33</span></span>
                                            <a href="/Home/OrdersList"> <span class="weight-500 uppercase-font txt-light block font-13">Orders</span></a> 
                                        </div>
                                        <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                            <i class="fa fa-cart-arrow-down txt-light data-right-rep-icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-default card-view pa-0">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pa-0">
                            <div class="sm-data-box bg-yellow">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                            <span class="txt-light block counter"><span class="counter-anim">34</span></span>
                                            <a href="/Home/ProductList"> <span class="weight-500 uppercase-font txt-light block">Products</span></a>
                                        </div>
                                        <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                            <i class="fa fa-product-hunt txt-light data-right-rep-icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-default card-view pa-0">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pa-0">
                            <div class="sm-data-box bg-green">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                            <span class="txt-light block counter"><span class="counter-anim">0</span></span>
                                            <span class="weight-500 uppercase-font txt-light block">Amount</span>
                                        </div>
                                        <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                            <i class="fa fa-money txt-light data-right-rep-icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-default card-view pa-0">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pa-0">
                            <div class="sm-data-box bg-blue">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                            <span class="txt-light block counter"><span class="counter-anim">0</span></span>
                                            <span class="weight-500 uppercase-font txt-light block">Returns</span>
                                        </div>
                                        <div class="col-xs-6 text-center  pl-0 pr-0 pt-25  data-wrap-right">
                                            <i class="fa fa-retweet txt-light data-right-rep-icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Row -->
        <!-- Row -->
        <div>
            <h5 class="txt-dark" style="text-align:center;">New Orders</h5>
        </div>
        <div class="row" style="margin-top:10px;">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body row">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-hover display  pb-30 table-bordered">
                                        <thead  style="background:#b0c4de;">
                                            <tr>
                                                <th>S.No</th>
                                                <th>Order Number</th>
                                                <th>Ordered Date</th>
                                                <th>Invoice Number</th>
                                                <th>Total Amount</th>
                                                
                                                <th>View</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>154</td>
                                                   <td>02-06-2018 15:57:07</td>
                                                        <td>N/A</td>
                                                    <td>6606</td>

                                                    <td><a href="/Home/ViewOrderDetails?id=154" style="color:blue">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>152</td>
                                                   <td>31-05-2018 23:26:09</td>
                                                        <td>N/A</td>
                                                    <td>9780</td>

                                                    <td><a href="/Home/ViewOrderDetails?id=152" style="color:blue">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>149</td>
                                                   <td>31-05-2018 22:33:52</td>
                                                        <td>N/A</td>
                                                    <td>4500</td>

                                                    <td><a href="/Home/ViewOrderDetails?id=149" style="color:blue">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>148</td>
                                                   <td>31-05-2018 22:30:26</td>
                                                        <td>N/A</td>
                                                    <td>3708</td>

                                                    <td><a href="/Home/ViewOrderDetails?id=148" style="color:blue">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>147</td>
                                                   <td>31-05-2018 22:25:01</td>
                                                        <td>N/A</td>
                                                    <td>3870</td>

                                                    <td><a href="/Home/ViewOrderDetails?id=147" style="color:blue">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>146</td>
                                                   <td>31-05-2018 22:22:08</td>
                                                        <td>N/A</td>
                                                    <td>3870</td>

                                                    <td><a href="/Home/ViewOrderDetails?id=146" style="color:blue">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>145</td>
                                                   <td>31-05-2018 22:18:40</td>
                                                        <td>N/A</td>
                                                    <td>4944</td>

                                                    <td><a href="/Home/ViewOrderDetails?id=145" style="color:blue">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>144</td>
                                                   <td>31-05-2018 22:13:49</td>
                                                        <td>N/A</td>
                                                    <td>3870</td>

                                                    <td><a href="/Home/ViewOrderDetails?id=144" style="color:blue">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>143</td>
                                                   <td>30-05-2018 17:24:06</td>
                                                        <td>N/A</td>
                                                    <td>3708</td>

                                                    <td><a href="/Home/ViewOrderDetails?id=143" style="color:blue">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>142</td>
                                                   <td>30-05-2018 17:22:26</td>
                                                        <td>N/A</td>
                                                    <td>5040</td>

                                                    <td><a href="/Home/ViewOrderDetails?id=142" style="color:blue">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>138</td>
                                                   <td>29-05-2018 18:10:01</td>
                                                        <td>N/A</td>
                                                    <td>2256</td>

                                                    <td><a href="/Home/ViewOrderDetails?id=138" style="color:blue">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>136</td>
                                                   <td>29-05-2018 15:30:34</td>
                                                        <td>N/A</td>
                                                    <td>5640</td>

                                                    <td><a href="/Home/ViewOrderDetails?id=136" style="color:blue">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td>135</td>
                                                   <td>29-05-2018 15:18:48</td>
                                                        <td>N/A</td>
                                                    <td>3348</td>

                                                    <td><a href="/Home/ViewOrderDetails?id=135" style="color:blue">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>134</td>
                                                   <td>29-05-2018 15:15:45</td>
                                                        <td>N/A</td>
                                                    <td>3720</td>

                                                    <td><a href="/Home/ViewOrderDetails?id=134" style="color:blue">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>15</td>
                                                    <td>133</td>
                                                   <td>29-05-2018 15:13:34</td>
                                                        <td>N/A</td>
                                                    <td>5160</td>

                                                    <td><a href="/Home/ViewOrderDetails?id=133" style="color:blue">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>16</td>
                                                    <td>132</td>
                                                   <td>29-05-2018 15:00:29</td>
                                                        <td>N/A</td>
                                                    <td>6072</td>

                                                    <td><a href="/Home/ViewOrderDetails?id=132" style="color:blue">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>17</td>
                                                    <td>131</td>
                                                   <td>29-05-2018 14:57:01</td>
                                                        <td>N/A</td>
                                                    <td>3840</td>

                                                    <td><a href="/Home/ViewOrderDetails?id=131" style="color:blue">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>18</td>
                                                    <td>129</td>
                                                   <td>28-05-2018 17:47:32</td>
                                                        <td>N/A</td>
                                                    <td>6822</td>

                                                    <td><a href="/Home/ViewOrderDetails?id=129" style="color:blue">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>128</td>
                                                   <td>28-05-2018 17:44:20</td>
                                                        <td>N/A</td>
                                                    <td>4932</td>

                                                    <td><a href="/Home/ViewOrderDetails?id=128" style="color:blue">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>20</td>
                                                    <td>127</td>
                                                   <td>28-05-2018 17:38:08</td>
                                                        <td>N/A</td>
                                                    <td>4728</td>

                                                    <td><a href="/Home/ViewOrderDetails?id=127" style="color:blue">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>21</td>
                                                    <td>126</td>
                                                   <td>28-05-2018 17:32:50</td>
                                                        <td>N/A</td>
                                                    <td>4944</td>

                                                    <td><a href="/Home/ViewOrderDetails?id=126" style="color:blue">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>22</td>
                                                    <td>108</td>
                                                   <td>19-05-2018 19:07:46</td>
                                                        <td>N/A</td>
                                                    <td>4728</td>

                                                    <td><a href="/Home/ViewOrderDetails?id=108" style="color:blue">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>23</td>
                                                    <td>106</td>
                                                   <td>19-05-2018 12:03:40</td>
                                                        <td>N/A</td>
                                                    <td>3714</td>

                                                    <td><a href="/Home/ViewOrderDetails?id=106" style="color:blue">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>24</td>
                                                    <td>104</td>
                                                   <td>17-05-2018 23:31:07</td>
                                                        <td>N/A</td>
                                                    <td>2442</td>

                                                    <td><a href="/Home/ViewOrderDetails?id=104" style="color:blue">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>25</td>
                                                    <td>100</td>
                                                   <td>17-05-2018 13:28:04</td>
                                                        <td>N/A</td>
                                                    <td>3708</td>

                                                    <td><a href="/Home/ViewOrderDetails?id=100" style="color:blue">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td>26</td>
                                                    <td>82</td>
                                                   <td>15-05-2018 10:46:01</td>
                                                        <td>N/A</td>
                                                    <td>2988</td>

                                                    <td><a href="/Home/ViewOrderDetails?id=82" style="color:blue">View</a></td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection