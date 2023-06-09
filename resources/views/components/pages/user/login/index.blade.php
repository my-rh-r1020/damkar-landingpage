<section class="bg-white">
    <div class="flex flex-wrap h-screen">
        <div class="w-full md:w-6/12 lg:w-5/12 flex items-center justify-center">
            <div class="py-20 lg:py-0 w-7/12">
                {{-- Alert Signin --}}
                @if(session()->has('signinError'))
                <div class="mb-8 bg-red-500 py-2 text-center text-white">
                    {{ session('signinError') }}
                </div>

                {{-- Alert v2 with Component --}}
                {{-- <x-alert type="error" :message="session('signinError')"/> --}}
                @endif
                <div class="main-title">
                    <h3 class="text-blackColor text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl mb-2 lg:mb-4">Login</h3>
                    <span class="text-greyColorAlt">Enter your email and password to login</span>
                </div>
                <form action="/login" method="post">
                    @csrf
                    <div class="mb-4">
                        <input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="Enter Your Email Address" class="w-full px-4 py-3 text-sm lg:text-base rounded-md focus:outline-double focus:outline-[#000BED] bg-white border-2 border-whiteColorAlt @error('email') is-invalid @enderror">
                        @error('email')
                            <div class="text-redColorAlt mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-10">
                        <input type="password" name="password" id="password" placeholder="Enter Your Password" class="w-full px-4 py-3 text-sm lg:text-base rounded-md focus:outline-double focus:outline-[#000BED] bg-white border-2 border-whiteColorAlt">
                    </div>
                    <button class="w-full py-2 bg-blue-500 hover:bg-blue-600 rounded-md text-white" type="submit">Sign In</button>
                </form>
            </div>
        </div>
        <div class="w-full md:w-6/12 lg:w-7/12">
            <img src="/assets/images/webpages/damkar-tpi.jpg" alt="login-image" class="h-full">
        </div>
    </div>
</section>

@push('scripts')

<script>
    @if(session()->has('signinError'))
    Swal.fire({
        title: '{{ session("signinError") }}',
        icon: 'error',
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast)=>{
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
    @endif
    
    // const Toast = Swal.mixin({
    //     toast: true,
    //     position: 'top-end',
    //     showConfirmButton: false,
    //     timer: 3000,
    //     timerProgressBar: true,
    //     didOpen: (toast)=>{
    //         toast.addEventListener('mouseenter', Swal.stopTimer)
    //         toast.addEventListener('mouseleave', Swal.resumeTimer)
    //     }
    // })
</script>

@endpush