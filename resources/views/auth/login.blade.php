<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <h2 class="text-primary my-2 text-center">Login Form</h2>
                <div class="card p-4 my-4 shadow-sm">

                    <ul>
                        @foreach ($errors->all() as $error)
                        <li class="text-danger">{{$error}}</li>
                        @endforeach
                    </ul>

                    <form method="POST">@csrf

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input required value="{{old('email')}}" name="email" type="text" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                            <x-error name="email" />
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input required name="password" type="password" class="form-control"
                                id="exampleInputPassword1">
                            <x-error name="password" />
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
