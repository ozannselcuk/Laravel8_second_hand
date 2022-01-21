<div>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif

    <form wire:submit.prevent="store">
        @csrf
        <div class="row">

            <div class="col-sm-12">
                <input wire:model="subject" type="text" placeholder="Subject"/>
                @error('subject')<span class="text-danger">{{$message}}</span>@enderror
            </div>

            <div class="col-sm-12">
                <input type="text" wire:model="review" placeholder="Your Review"></input>
                @error('review')<span class="text-danger">{{$message}}</span>@enderror
            </div>

            <div class="col-lg-12">
                <br>
                @auth
                    <button type="submit">Comment</button>
                @else
                    <a href="/home" class="btn btn-primary">For Submit Your Review, Please Login</a>
                @endauth
            </div>

        </div>
    </form>
</div>
