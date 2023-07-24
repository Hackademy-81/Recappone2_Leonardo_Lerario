<x-layout>
    <div class="container-fluid bg-primary">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center display-2">
                    Registrati
                </h1>
            </div>
        </div>
    </div>
    
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">UserName</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{route('login')}}">Sei registrato? Accedi!</a>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>