<!DOCTYPE html>
<html lang="en">
    @include('layouts.layout')
    <style>
        
    </style>
<body>
    
        @include('section.navbar')
        <div role="main" class="main">
            <section class="bg-color">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 align-self-center p-static order-2 text-center">
                            <h1 class="text-1 font-weight-medium mt-3">Clients Data</h1>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container-fluid pt-5 table-responsive">
                
                    <table class="table table-bordered text-center border shadow" >
                        
                            <tr class="product-nav">
                                <th>id</th>
                                <th>name</th>
                                <th>email</th>
                                <th>subject</th>
                                <th>message</th>
                            </tr>
                            @foreach ($contacts as $contact)
                    
                            <tr>
                                <td>{{$contact->id}}</td>
                                <td>{{$contact->name}}</td>
                                <td>{{$contact->email}}</td>
                                <td>{{$contact->subject}}</td>
                                <td>{{$contact->message}}</td>
                            </tr>
                            @endforeach
                        
                    </table>
                
            </div>
        </div>
        @include('section.footer')
        @include('layouts.scripts')        
</body>
</html>