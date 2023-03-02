<!--suppress ALL -->
<div
        x-data="toastData()"
        @notify.window="notify($event)"
        :class="location"
        class="toast-container position-absolute p-3 position-fixed" id="toastPlacement"
>

    <template x-for="message in messages" :key="messages.indexOf(message)">
        <div
                :class="msg_class(message.type)"
                class="toast show bg-success"
                :style="style"
        >
            <div class="toast-header">
                <i
                        :class="icon(message.type)"
                        class="icon rounded me-2"
                ></i>
                <strong class="me-auto text-black text-bold" x-text="message.title"></strong>
                <small x-text="message.secondary"></small>
                <button type="button" class="btn-close text-black" aria-label="Close" @click="remove(message)"></button>
            </div>
            <div class="toast-body text-white text-bold" x-text="message.message"></div>
        </div>
    </template>
</div>

<script>
    function toastData() {
        const location_class = {
                'top-left'      : 'top-0 start-0',
                'top-center'    : 'top-0 start-50 translate-middle-x',
                'top-right'     : 'top-0 end-0',
                'middle-left'   : 'top-50 start-0 translate-middle-y',
                'middle-center' : 'top-50 start-50 translate-middle',
                'middle-right'  : 'top-50 end-0 translate-middle-y',
                'bottom-left'   : 'bottom-0 start-0',
                'bottom-center' : 'bottom-0 start-50 translate-middle-x',
                'bottom-right'  : 'bottom-0 end-0',
        }

        const toast_class = {
            'success'   : 'bg-success',
            'error'     : 'bg-danger',
            'info'      : 'bg-info',
            'warning'   : 'bg-warning',
        }

        const toast_icon = {
            'success'   : 'cil-check-circle text-success',
            'error'     : 'cil-x-circle text-danger',
            'info'      : 'cil-exclamation text-info',
            'warning'   : 'cil-warning text-warning',
        }

        return {
            messages : [],
            remove(message) {
                this.messages.splice(this.messages.indexOf(message), 1)
            },
            notify(event) {
                const message = event.detail
                this.messages.push(message)
                setTimeout(() => { this.remove(message) }, {{ config('livewire-toast.delay') }})
            },
            icon : (type) => toast_icon[type],
            msg_class : (type) => toast_class[type],
            style: 'opacity: {{ config('livewire-toast.opacity') }}% !important;',
            location: location_class['{{ config('livewire-toast.position') }}'],
        }
    }
</script>
