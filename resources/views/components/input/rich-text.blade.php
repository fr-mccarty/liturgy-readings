<div
    class="rounded-md shadow-sm"
    x-data="{
        value: @entangle($attributes->wire('model')),
        isFocused() { return document.activeElement !== this.$refs.trix },
        setValue() { this.$refs.trix.editor.loadHTML(this.value) },
    }"
    x-init="setValue(); $watch('value', () => isFocused() && setValue());
        document.querySelector('.trix-button-group--file-tools').remove();
    "
    x-on:trix-change="value = $event.target.value"
    {{ $attributes->whereDoesntStartWith('wire:model') }}
    wire:ignore
>
    <input id="x" type="hidden">
    <trix-editor x-ref="trix" input="x" class="trix form-textarea block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></trix-editor>
</div>
