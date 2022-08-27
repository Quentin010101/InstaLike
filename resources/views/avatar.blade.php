<x-layout>
    @if(session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif
    <form action="/avatar" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="avatar" id="">
        <input type="submit" value="send">
    </form>
</x-layout>