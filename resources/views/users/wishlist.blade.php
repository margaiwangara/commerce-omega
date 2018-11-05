@extends('users.layouts.app')

@section('title', 'Wishlist')

@section('content')
    {{-- breadcrumb --}}
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
    				Home
    				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
    			</a>
    
            <span class="stext-109 cl4">
    				Shopping Cart
    			</span>
        </div>
    </div>

    {{-- Wishlist --}}
    <div class="bg0 p-t-75 p-b-85">
        <div class="container">
            {{-- Include messages --}}
            @include('users.includes.messages') 

            <div class="row">
                <div class="col-lg-12 col-xl-12 m-b-50">
                    <div class="m-l-25 m-r-38 m-lr-0-xl">
                        <div class="wrap-table-shopping-cart">
                            <table class="table-shopping-cart">
                                <tr class="table_head">
                                    <th class="column-1">Product</th>
                                    <th class="column-2"></th>
                                    <th class="column-3">Price</th>
                                    <th class="column-4">Color</th>
                                    <th class="column-5">Size</th>
                                </tr>
                                <tr class="table_row">
                                    <td class="column-1">
                                        <div class="how-itemcart1">
                                            <img src="{{ asset('images/product-01.jpg') }}" alt="lorem  ipsum">
                                        </div>
                                    </td>
                                    <td class="column-2">
                                        Lorem, ipsum.
                                    </td>
                                    <td class="column-3">$ 360.00</td>
                                    <td class="column-4">Red</td>
                                    <td class="column-5">S</td>
                                    <td class="column-5" style="width: 80px;">
                                        <form action="{{ route('cart.destroy', 1) }}" method="POST">
                                            {{ csrf_field() }} {{ method_field('DELETE') }} {{-- Button --}}
                                            <button type="submit" class="btn btn-secondary btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection