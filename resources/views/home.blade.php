<x-layouts.main_layout>
    <x-slot:content>
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="display-6">
                        @guest
                            <li><a href="{{route('login')}}">Login</a></li>
                        @else
                            @can('user_is_admin')
                                <li><a href="{{route('only_admin')}}">ADMINS</a></li>
                            @endcan
                            
                            @can('user_is_user')
                                <li><a href="{{route('only_user')}}">USERS</a></li>
                            @endcan

                            @cannot('user_is_admin')
                                <div class="row">
                                    <div class="col">
                                        <p class="text-danger">FOGO AOS ADMINS!!</p>
                                    </div>
                                </div>
                            @endcannot

                            @cannot('user_is_user')
                                <div class="row">
                                    <div class="col">
                                        <p class="text-danger">OPRESSÃO AOS USERS!!</p>
                                    </div>
                                </div>
                            @endcannot

                            @canany(['user_is_admin', 'user_is_user'])
                                <p>paz e amor</p>
                            @endcanany
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </x-slot:content>
</x-layouts.main_layout>