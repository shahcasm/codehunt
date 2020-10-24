@extends('_layouts.master')

@section('title', 'Submissions')

@section('content')
    <h1>Submissions</h1>

    <form action="https://formcarry.com/s/{{ $page->services->formcarry }}" method="post">
        <div>
            <label for="sender">Name</label><br>
            <input type="text" name="sender" id="sender" required>
        </div>

        <div>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" required>
        </div>

        <div>
            <label for="message">Message</label><br>
            <textarea name="message" id="message" required></textarea>
        </div>

        <input type="text" name="_gotcha" style="display: none;">

        <input type="submit" name="submit" value="Send">
    </form>
@endsection