
<form action="{{ route('front.posts.index') }}" method="GET" class="mb-4">
    @csrf

<div class="flex flex-col space-y-4 vg-white rounded-md shadow-md p-8">
    {{-- <a href="{{ route('front.posts.show', $post) }}" class="m-auto">
        <figure>
            <img src="{{ Storage::url($post->img_path) }}" alt="{{ Str::limit(\nl2br(e($post->body)), 150) }}">
        </figure>
    </a> --}}

    <div class=" grid grid-cols-5 group">

            <span class="text-xl font-semibold text-red-600 transition duration-200 group-hover:text-red-700 group-hover:underline underline-offset-2 ">
                <p class="col-span-2"> {{ \nl2br(e($sandwich->name)) }}</p>

            </span>
            <p class="col-span-3 pl-7 max-w-[85%]">{{ \nl2br(e($sandwich->ingredients)) }}</p>

        <p class="text-gray-700 break-words col-span-1">
            {{ Str::limit(\nl2br(e($sandwich->prix)), 150) }}€

            <button type="button" class="bg-green-600 w-5" onclick="updateQuantity({{$sandwich->id}}, 1)">+</button>


        <input type="number" id="quantity-{{$sandwich->id}}"value="1" min="1">


        <button type="button" class="bg-red-600 w-5" onclick="updateQuantity({{$sandwich->id}}, -1)">-</button>
        </p>


    </div>
</div>
</form>
<script>

// Fonction pour gérer l'incrémentation d'un bouton spécifique
function updateQuantity(productId, amount) {
        // Trouver le champ de quantité (input) par son ID
        const quantityInput = document.getElementById('quantity-' + productId);
        // Récupérer la quantité actuelle
        let currentQuantity = parseInt(quantityInput.value);
        // Mettre à jour la quantité en fonction du bouton cliqué (+1 ou -1)
        currentQuantity += amount;

        // Si la quantité est inférieure à 1, la réinitialiser à 1
        if (currentQuantity < 1) {
            currentQuantity = 1;
        }

        // Mettre à jour la valeur de l'input de quantité
        quantityInput.value = currentQuantity;
    }



</script>
