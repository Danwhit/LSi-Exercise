<x-layout>
    <h1>Email Preview</h1>
    <h2>New Product Enquiry</h2>
    <p>We have recieved an enquiry from {{$output[0]}} regarding our product <em>{{$output[2]}}</em>. The message is as follows:</p>
    <blockquote>{{$output[3]}}</blockquote>
    <p>Please follow up the enquiry by replying to <a href="mailto:{{$output[1]}}?subject=Responding to your enquiry for {{$output[2]}}">{{$output[1]}}</a>.</p>
</x-layout>