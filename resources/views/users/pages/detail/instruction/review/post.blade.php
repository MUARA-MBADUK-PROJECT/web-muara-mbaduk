<div class="max-w-md mx-auto">
    <form method="POST" action="{{route('history.review')}}">
        @csrf
        <input type="text" name="payment" value="{{$data->id}}" hidden>
        @foreach($packages as $key => $value)
            <input type="text" name="packages[]" value="{{$value['id']}}" hidden>
        @endforeach
        <div class="mb-4">
            <div class="rating">
                <input type="radio" name="rating" value=1 class="mask mask-star-2 bg-orange-400 checked:bg-orange-400"  />
                <input type="radio" name="rating" value=2 class="mask mask-star-2 bg-orange-400 checked:bg-orange-400"  />
                <input type="radio" name="rating" value=3 class="mask mask-star-2 bg-orange-400 checked:bg-orange-400" />
                <input type="radio" name="rating" value=4 class="mask mask-star-2 bg-orange-400 checked:bg-orange-400" />
                <input type="radio" name="rating" value=5 class="mask mask-star-2 bg-orange-400 checked:bg-orange-400" />
            </div>
        </div>
        <div class="mb-4">
            <label for="review" class="block text-gray-700 text-sm font-bold mb-2">Review:</label>
            <textarea id="review" name="review" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-400" required></textarea>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
    </form>
</div>