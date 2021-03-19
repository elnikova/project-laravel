@extends('layouts.main')

@section('content')

    <h1>Reviews</h1>

    @forelse ($reviews as $review)
        <div class="border p-3 m-3">
        {{$review->name}}<hr><blockquote>{{$review->review}}</blockquote>
        </div>
        @empty
        <p>Добавьте отзыв к товару</p>
    @endforelse
    
   <p>Оставить отзыв</p>
    <form action="/reviews" method="POST">
        @csrf 
        <div class="form-group">
            <label for="nameReviews">Name</label>
            <input type="text"  
                   name="name" 
                   id="name" 
                   class="form-control border-secondary inputReviewsName"                    
                   placeholder="Ваше имя"
                   value="{{old('nameReviews')}}">
        </div>
        <div class="form-group">
            <label for="review">Review</label>
            <textarea name="review" 
                      id="review" 
                      class="form-control border-secondary textareaReviews"                      
                      placeholder="*Напишите свой отзыв">{{old('review')}}</textarea>
        </div>  
        <button class="btn-empty">Отправить</button>    
    </form>

    {{ $reviews->links() }}





@endsection


@section('title', 'Contacts Us')


    