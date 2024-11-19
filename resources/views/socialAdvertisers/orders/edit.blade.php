@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Order Status</h1>
        <form action="{{ route('orders.update', $order->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" id="status" name="status" class="form-control" value="{{ old('status', $order->status) }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Status</button>
        </form>
    </div>
@endsection
