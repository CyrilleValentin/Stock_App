 <button id="open-cart-button"
style=" --tw-bg-opacity: 1;
background-color: rgb(63 131 248 / var(--tw-bg-opacity)); --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity)); padding: 0.5rem/* 8px */;
    border-radius: 9px; ">Panier</button>

    <!-- Conteneur du panier (initialement masqué) -->
    <div id="cart-container"
        class="   shadow-lg overflow-y-auto transform translate-x-full transition-transform duration-300 ease-in-out"
        style="display: none; position: absolute; top: 0px; right: 0px; width: 33.333333%;height: 100%;z-index: 900;">
        <!-- En-tête du panier -->
        <div class="bg-blue-500 text-white p-4">
            <h2 class="text-2xl font-semibold" style="">Mon Panier</h2>
            <button id="close-cart-button" class=" float-right">&times;</button>
        </div>

        <!-- Contenu du panier ici -->
        <div id="cart-content" class="p-4">
            <!-- Articles du panier ici -->
        </div>

        <!-- Total du panier -->
        <div class="bg-gray-200 p-4">
            <p class="text-xl font-semibold">Total : $0</p>
            <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Passer la Commande</button>
        </div>
    </div>
    
