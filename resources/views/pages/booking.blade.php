@extends('layouts.app', ['activePage' => 'booking', 'title' => 'Bookings | ANKA', 'navName' => 'Bookings', 'activeButton' => 'laravel'])

@php
    use App\Models\Product;
@endphp
@section('content')
@if (session('status'))
    <div class="alert alert-success">{{session('status')}}</div>
@endif
    <div class="content">
        <div class="container-fluid">
            <h1 style = "text-align: center">Orders</h1>
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-2"><h6>Order Name</h6></div>
                            <div class="col-8"><h6>Description</h6></div>
                            <div class="col-2">Quantity</div>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                    @foreach ($order as $anorder)
                        @php
                            $product = Product::where('product_name',$anorder->product_name)->first();
                        @endphp
                        <li class="list-group-item"><div class="row">
                        <div class="col-2 smallc">{{$anorder->product_name}}</div>
                        <div class="col-8">{{$product->product_description}}</div>
                        <div class="col-2">{{$anorder->quantity_booked}}</div>
                    </div>
                    </li>
<<<<<<< HEAD
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-2">Jacket</div>
                            <div class="col-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, doloribus facere nemo quasi totam, maxime commodi blanditiis deleniti maiores numquam eos eaque molestiae, perspiciatis recusandae? Asperiores nihil itaque veniam aut.</div>
                            <div class="col-2">3</div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-2">Watch</div>
                            <div class="col-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, doloribus facere nemo quasi totam, maxime commodi blanditiis deleniti maiores numquam eos eaque molestiae, perspiciatis recusandae? Asperiores nihil itaque veniam aut.</div>
                            <div class="col-2">2</div>
                        </div>
                    </li>
=======
                    @endforeach
                    
>>>>>>> dbe6f0934de150902450ef3291568f556d545e93
                    </ul>
              </div>
        </div>
    </div>
@endsection
