    <style>
        .style1{font-family: Arial, Helvetica, sans-serif;font-size:10pt;width: 100%;}
        .cartTable{border: 1px solid #fffcc;border-collapse: collapse;}
        .cartTable tr{border: 1px solid #fffcc;}
        .cartTable td{border: 1px solid #fffcc;}
    </style>
<table width="100%">
    <tr>
        <td valign="left" style="text-align:left"><img src="{{asset('public/images/Benaa_Logo.png')}}" /></td>
        <td valign="right" style="text-align:right"><h1>QUOTATION</h1></td>
    </tr>
    <tr>
        <td>
            Ducon Industries<br/>
            National Industries Park<br/>
            TP010225, PO Box 262394<br/>
            Dubai, UAE<br/>
        </td>
        <td style="text-align:right">
            Phone: +971 4 8235882<br/>
            Fax: +971 4 880 6980<br/>
            Email: sales@800benaa.com<br/>
            Website: www.800benaa.com<br/>
        </td>
    </tr>
</table>
<br/>
<hr/>
<br/>
<table width="100%" style="font-size: 13px;">
    <tr>
        <td style="text-align:left">
            <table>
                <tr>
                    <td>To:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Mr/Ms. </td>
                    <td>{{$details->get('firstname'). ' '. $details->get('lastname')}}</td>
                </tr>
                <tr>
                    <td>Phone: </td>
                    <td>{{$details->get('phone')}}</td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td>{{$details->get('email')}}</td>
                </tr>
                <tr>
                    <td>Company: </td>
                    <td>{{$details->get('company') == ''? NA : $details->get('company')}}</td>
                </tr>
                <tr>
                    <td>Address: </td>
                    <td>{{$details->get('apartment') .', '. $details->get('street'). ', '.$details->get('region').', '.$details->get('country') }} </td>
                </tr>
            </table>
        </td>
        <td style="text-align:right">
            <table width="100%" style="text-align:right">
                <tr>
                    <td>Date: </td>
                    <td>{{date('M-y-d')}}</td>
                </tr>
                <tr>
                    <td>Expiry Date:</td>
                    <td>{{date('M-y-d', strtotime('+7 days'))}}</td>
                </tr>
                <tr>
                    <td>Quotation Ref: </td>
                    <td>EGL{{date('Y-m-d H:i:s')}}</td>
                </tr>
            </table>
        </td>
    </tr>
</table>


    @if(count(\Cart::content()) > 0)
        <table class="style1 cartTable" style="margin-top:20px;">
            <tr>
                <td>No</td>
                <td>Product</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Total</td>
            </tr>
        @foreach(\Cart::content() as $key => $items)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ucwords(strtolower($items->name))}}</td>
                <td>{{$items->price}}</td>
                <td>{{$items->qty}}</td>
                <td>{{$items->total}}</td>
            </tr>            
        @endforeach
        </table>
    @else
        <h2>Empty Cart!</h2>
    @endif

    <div class="dropcart__totals">
        <table>
            <tr>
                <th>Subtotal</th>
                <td>AED {{\Cart::subtotal()}}</td>
            </tr>
            <!-- <tr>
                <th>Shipping</th>
                <td>Not Calculated</td>
            </tr> -->
            <tr>
                <th>Tax</th>
                <td>AED {{\Cart::tax()}}</td>
            </tr>
            <tr>
                <th>Total</th>
                <td>AED {{\Cart::total()}}</td>
            </tr>
        </table>
    </div>