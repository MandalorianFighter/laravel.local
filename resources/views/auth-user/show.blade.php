<x-layout>

<title>AuthUsers</title>

        @foreach ($authUsers as $user)
                <div>
                        <h2>{{ $user->login }}</h2>
                        
                        <div>
                              {{ $user->authprofile }};
                        </div>
                </div>
        @endforeach
</x-layout>
