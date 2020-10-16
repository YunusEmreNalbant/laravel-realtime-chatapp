<div class="message-wrapper">
    <ul class="messages">
        @foreach($messages as $message)
            <li class="message clearfix">
                <div class="{{($message->from == \Illuminate\Support\Facades\Auth::id()) ? 'sent' : 'received'}}">
                    <p>{{$message->message}}</p>
                    <p class="date">{{date('d M y, h:i a',strtotime($message->created_at))}}</p>
                </div>
            </li>
            <li class="message clearfix">
                <div class="received">
                    <p>Lorem ipsum dolor.</p>
                    <p class="date">1 Sep,2020</p>
                </div>
            </li>
        @endforeach
    </ul>
</div>

<div class="input-text">
    <input type="text" name="message" class="submit">
</div>
