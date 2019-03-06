@extends('frontend.layout.main')

@section('title')
Contact Us
@endsection

@section('content')
<div id="app">
  <section id="contact" class="container-fluid">
    <div class="row d-flex justify-content-center">
      <div class="col-sm-10 contact-box">
        <!-- contact box -->
        <div class="row d-flex justify-content-center">
          <div class="col-sm-6 bg-white contact-box-shadow p-5">
            <form class="" action="index.html" method="post">
              <div class="form-group">
                <label for="contact-name" class="text-gray">Your Name</label>
                <input type="text" class="form-control contact-textbox" id="contact-name" placeholder="Name" required>
              </div>
              <div class="form-group">
                <label for="contact-phone" class="text-gray">Phone</label>
                <input type="text" class="form-control contact-textbox" id="contact-phone" placeholder="Phone" required>
              </div>
              <div class="form-group">
                <label for="contact-message" class="text-gray">Message</label>
                <input type="text" class="form-control contact-textbox" id="contact-messsage" placeholder="Message" required>
              </div>
              <button type="submit" class="btn btn-pink text-brown pull-right">Submit</button>
            </form>
          </div>
          <div class="col-sm-4 bg-pink contact-box-shadow p-5">
            <h1 class="text-custom text-brown">Contact Us</h1>
            <p class="text-brown">
              PT. Meiji Indonesia<br>
              Jl. Tanah Abang II No.4, Jakarta Pusat, Indonesia
            </p>
            <table class="text-brown">
              <tr>
                <td><i class="fa fa-phone fa-lg"></i></td>
                <td width="40" class="text-right">:</td>
                <td>(62-21) 384 5584</td>
              </tr>
              <tr>
                <td><i class="fa fa-fax fa-lg"></i></td>
                <td class="text-right">:</td>
                <td>(62-21) 345 7650</td>
              </tr>
              <tr>
                <td><i class="fa fa-envelope fa-lg"></i></td>
                <td class="text-right">:</td>
                <td>adm@meiji.co.id</td>
              </tr>
            </table>
          </div>
          <div class="contact-product-img">
            <img src="{{asset('images/contact-product.png')}}" width="487" alt="">
          </div>
        </div>
        <!-- contact box -->
      </div>
    </div>
  </section>
</div>
@endsection
