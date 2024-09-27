<div x-data="{ input: '{{$value}}', showMsg: false, txtCopied: 'Copied' }" :key="{{$value}}" class="flex items-center ">
    {{$value}}
    <a type="button" @click="copyToClipboard(input), showMsg = true, setTimeout(() => { showMsg = false; txtCopied='Copy' }, 1500)"  class="cursor-pointer">
        <box-icon name="copy" class="fill-current ml-1 opacity-25"></box-icon>
        <div x-show="showMsg" @click.away="showMsg = false" class="fixed bottom-3 right-3 z-20 max-w-sm overflow-hidden bg-green-400 border border-green-400 rounded" style="display: none;">
            <p class="p-3 flex items-center justify-center text-white">{{__('Copied to Clipboard')}}</p>
        </div>
    </a>
</div>
