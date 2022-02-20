<div>
    <div
        x-cloak
        x-show="open_cam"
        class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div
                @click.outside="toggle_cam"
                class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-3xl sm:w-full sm:p-6">
                <div>
                    <video id="video"></video>
                    <button @click="startVideo">Start</button>
                    <button @click="stopVideo">Stop</button>
                </div>
                <div class="mt-5 sm:mt-6">
                    <button
                        @click="toggle_cam"
                        type="button"
                        class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">
                        Schliessen
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        let qrScanner;

        document.addEventListener("DOMContentLoaded", function (event) {
            qrScanner = new QrScanner(document.getElementById('video'), result => setResult(result));
        });

        function startVideo() {
            qrScanner.start()
        }

        function stopVideo() {
            qrScanner.stop()
        }

        function setResult(result) {
            console.log('decoded qr code:', result)
            stopVideo()
        }

        document.addEventListener('alpine:init', () => {
            Alpine.data('open_cam', () => ({
                open_cam: false,

                toggle_cam() {
                    this.open_cam = !this.open_cam
                    if (this.open_cam)
                        startVideo()
                    else
                        stopVideo()
                }
            }))
        })
    </script>
</div>
