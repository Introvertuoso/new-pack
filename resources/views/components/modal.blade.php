{{--TODO: Make this a form so that required attribute works on it--}}

<div wire:ignore.self
     id="popup-{{ $title }}"
     class="popup-{{ $title }} opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center"
     style="z-index: 99 !important;">
    <div onclick="toggleModal('{{ $title }}')" class="absolute w-full h-full bg-gray-900 opacity-50">

    </div>

    <div class="popup-container bg-white max-w-full max-h-full mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <div
            onclick="toggleModal('{{ $title }}')"
            class="absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                 viewBox="0 0 18 18">
                <path
                    d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                </path>
            </svg>
            <span class="text-sm">
                (Esc)
            </span>
        </div>

        <!-- Add margin if you want to see some of the overlay behind the modal-->
        <div class="popup-content py-3 text-left px-3">
            <!--Title-->
            <div class="flex justify-between items-center">
                <p class="text-xl font-bold">
                    {{ $title }}
                </p>
                <div onclick="toggleModal('{{ $title }}')" class="cursor-pointer z-50 mb-4">
                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                         viewBox="0 0 18 18">
                        <path
                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                        </path>
                    </svg>
                </div>
            </div>

            <!--Body-->
            <div>
                {{ $content }}
            </div>

            <!--Footer-->
            <div class="flex justify-end">
                {{ $footer }}
            </div>
        </div>
    </div>

    <script>
        // var openmodal = document.querySelectorAll('.popup-open')
        // for (var i = 0; i < openmodal.length; i++) {
        //     openmodal[i].addEventListener('click', function (event) {
        //         event.preventDefault()
        //         toggleModal()
        //     })
        // }

        // const overlay = document.querySelector('.popup-overlay')
        // overlay.addEventListener('click', toggleModal)

        // var closemodal = document.querySelectorAll('.popup-close')
        // for (var i = 0; i < closemodal.length; i++) {
        //     closemodal[i].addEventListener('click', toggleModal)
        // }

        // document.onkeydown = function (evt) {
        //     evt = evt || window.event
        //     var isEscape = false
        //     if ("key" in evt) {
        //         isEscape = (evt.key === "Escape" || evt.key === "Esc")
        //     } else {
        //         isEscape = (evt.keyCode === 27)
        //     }
        //     if (isEscape && document.body.classList.contains('popup-active')) {
        //         toggleModal()
        //     }
        // };

        // TODO: change toggleModal to openModal and closeModal

        function toggleModal(id) {
            // alert(id)
            // const body = document.querySelector('body')
            // const modal = document.querySelector('.popup-' + id)
            const modal = document.getElementById('popup-' + id)
            modal.classList.toggle('opacity-0')
            modal.classList.toggle('pointer-events-none')
            // body.classList.toggle('popup-active')
        }
    </script>
</div>
