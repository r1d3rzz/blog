<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <h2 class="text-primary my-2 text-center">Register Form</h2>
                <div class="card p-4 my-4 shadow-sm">
                    <form>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Name</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Username</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
