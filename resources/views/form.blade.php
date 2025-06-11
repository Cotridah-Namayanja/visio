<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-10">
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-lg shadow-md">
            <div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    Add New Product
                </h2>
            </div>

            <form class="mt-8 " action=" {{ route('savepdt') }}" method="POST">
                @csrf

                <div class="rounded-md  space-y-4">
                    <div>
                        <label for="product_name" class="block text-sm font-medium text-gray-700">
                            Product Name
                        </label>
                        <input type="text" id="product_name" name="product_name" required
                            class="mt-1 appearance-none relative block w-full px-3 py-2 border border-gray-300
                            placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500
                            focus:border-indigo-500 focus:z-10 sm:text-sm">
                    </div>


                    <div>
                        <label for="unit" class="block text-sm font-medium text-gray-700">
                            Unit
                        </label>
                        <input type="text" id="unit" name="unit" required
                            class="mt-1 appearance-none relative block w-full px-3 py-2 border border-gray-300
                            placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500
                            focus:border-indigo-500 focus:z-10 sm:text-sm">
                    </div>

                    <div>
                        <label for="quantity" class="block text-sm font-medium text-gray-700">
                            Quantity
                        </label>
                        <input type="number" id="quantity" name="quantity" min="0" required
                            class="mt-1 appearance-none relative block w-full px-3 py-2 border border-gray-300
                            placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500
                            focus:border-indigo-500 focus:z-10 sm:text-sm">
                    </div>

                    <div>
                        <label for="buying_price" class="block text-sm font-medium text-gray-700">
                            Buying Price
                        </label>
                        <input type="number" id="buying_price" name="buying_price" min="0" step="0.01" required
                            class="mt-1 appearance-none relative block w-full px-3 py-2 border border-gray-300
                            placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500
                            focus:border-indigo-500 focus:z-10 sm:text-sm">
                    </div>

                    <div>
                        <label for="selling_price" class="block text-sm font-medium text-gray-700">
                            Selling Price
                        </label>
                        <input type="number" id="selling_price" name="selling_price" min="0" step="0.01" required
                            class="mt-1 appearance-none relative block w-full px-3 py-2 border border-gray-300
                            placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500
                            focus:border-indigo-500 focus:z-10 sm:text-sm">
                    </div>
                </div>
                <div>
                    <button type="submit"
                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent
                        text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700
                        focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Add Product
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
