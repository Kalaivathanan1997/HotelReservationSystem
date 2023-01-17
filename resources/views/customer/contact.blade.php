@extends('customer.master')

@section('content')

<div class="breadcrumbs1_wrapper">
        <div class="container">
            <div class="breadcrumbs1"><a href="index.html">Home</a><span>|</span>Contacts</div>
        </div>
    </div>
    <div id="content">
        <div class="container">

            <div class="title1">CONTACT INFORMATION</div>

            <div class="title2">Lorem ipsum dolor sit amet concateur non troppo di saronno la prada</div>

            <div class="contact-location-wrapper">
                <div id="google_map"></div>
                <div class="contact-location">
                    <div class="txt1">KEEP IN TOUCH</div>
                    <div class="txt2">DELVATORE ADDRESS</div>
                    <div class="txt3">SUMMER HOTEL</div>
                    <div class="txt4">122 South City, Gridgum street<br>NY 12099, United States</div>
                    <div class="txt5">
                        <dl class="dl1">
                            <dt>Call:</dt>
                            <dd>+1 (368) 1234567</dd>
                            <dt>Email:</dt>
                            <dd><a href="#">info@yourdomain.com</a></dd>
                            <dt>Skype:</dt>
                            <dd>Delvatore.Hotel</dd>
                            <dt>Facebook:</dt>
                            <dd>Delvatore.facebook</dd>
                            <dt>Twitter:</dt>
                            <dd>@Delvatore.Hotel</dd>
                        </dl>
                    </div>
                </div>
            </div>

            <div class="title3">CONTACT FORM</div>

            <div id="note"></div>
            <div id="fields">
                <form id="ajax-contact-form" class="form-horizontal clearfix" action="javascript:;">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputName2">Name <span>*</span></label>
                                        <input type="text" class="form-control" id="inputName2" name="name" value=""
                                               placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputEmail">Email <span>*</span></label>
                                        <input type="text" class="form-control" id="inputEmail" name="email" value=""
                                               placeholder="">
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="inputMessage2">Comments <span>*</span></label>
                                <textarea class="form-control" rows="5" id="inputMessage2" name="content"
                                          placeholder=""></textarea>
                            </div>

                        </div>

                    </div>

                    <button type="submit" class="btn-default btn-cf-submit">send your message</button>
                </form>
            </div>


        </div>
    </div>



@endsection('content')