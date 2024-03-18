<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-アンケートフォーム</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <section class="text-gray-600 body-font relative" _msthidden="8">
        <div class="container px-5 py-24 mx-auto" _msthidden="8">
            <div class="flex flex-col text-center w-full mb-12" _msthidden="2">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900" _msttexthash="132405" _msthidden="1" _msthash="295">アンケートフォーム</h1>
            </div>
            <form class="lg:w-1/2 md:w-2/3 mx-auto" _msthidden="6" action="complete.php" method="post">
                <class="flex flex-wrap -m-2" _msthidden="6">
                    <div class="p-2 w-1/2" _msthidden="1">
                        <div class="relative" _msthidden="1">
                            <label for="name" class="leading-7 text-sm text-gray-600" _msttexthash="43069" _msthidden="1" _msthash="297">回答者名</label>
                            <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="回答者名">
                        </div>
                    </div>
                    <div class="p-2 w-1/2" _msthidden="1">
                        <div class="relative" _msthidden="1">
                            <label for="food_awnser" class="leading-7 text-sm text-gray-600" _msttexthash="58058" _msthidden="1" _msthash="298">好きな食べ物をご記入ください</label>
                            <input type="text" id="food_awnser" name="food_awnser" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="好きな食べ物">
                        </div>
                    </div>
                <div class="p-2 w-full" _msthidden="1">
                    <div class="relative" _msthidden="1">
                        <label for="hobby_awnser" class="leading-7 text-sm text-gray-600" _msttexthash="92924" _msthidden="1" _msthash="299">趣味をご記入きださい</label>
                        <input type="text" id="hobby_awnser" name="hobby_awnser" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="趣味">
                    </div>
                </div>
                <div class="p-2 w-full" _msthidden="1">
                    <button class="flex mx-auto text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg" _msttexthash="79859" _msthidden="1" _msthash="300" type="submit">送信</button>
                </div>
            </form>
        </div>
    </section>
  
</body>
</html>