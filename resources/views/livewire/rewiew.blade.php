<div>
    {{-- A good traveler has no fixed plans and is not intent arriving. --}}

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif
    <form class="consulting-form" wire:submit.prevent="store">
        @csrf

        <div class="row">
            <div class="form-group col-md-12">
                <input type="text" name="subject" id="subject" placeholder="Subject" wire:model="subject">
                @error('subject') <span class="text-danger"> {{$message}}</span> @enderror
            </div>

        </div>
        <div class="form-group">
            <textarea placeholder="Your review" name="message" wire:model="review"></textarea>
            @error('review') <span class="text-danger"> {{$message}}</span> @enderror
        </div>
        <div class="form-group">

            @error('rate') <span class="text-danger"> {{$message}}</span> @enderror
            <strong class="text-uppercase"> Your Rating:</strong>

            <div class="testimonial-item--ratings">
                <input type="radio" id="star5" wire:model="rate" value="5"/> <label for="star5"></label>
                <input type="radio" id="star4" wire:model="rate" value="5"/> <label for="star4"></label>
                <input type="radio" id="star3" wire:model="rate" value="5"/> <label for="star3"></label>
                <input type="radio" id="star2" wire:model="rate" value="5"/> <label for="star2"></label>
                <input type="radio" id="star1" wire:model="rate" value="5"/> <label for="star1"></label>
            </div>
        </div>

        @auth
            <button type="submit" name="" value="Save" class="cmn-btn">Save</button>

        @else
            <a href="/adminlogin" class="primary-btn"> Please login</a>
        @endauth
    </form>
</div>
