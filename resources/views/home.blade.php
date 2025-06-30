<x-layouts.main_layout>
    <x-slot:content>
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="display-6">
                        @guest
                            <li><a href="{{route('login')}}">Login</a></li>
                        @else
                            <li><a href="{{route('only_admin')}}">ADMINS</a></li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </x-slot:content>
</x-layouts.main_layout>