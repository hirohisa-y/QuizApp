<x-layout title="ホーム">
    <h1>クイズユニット編集</h1>
    <form action="#" method="post" class="space-y-10">
        <!-- ジャンル -->
      <div class="grid grid-cols-[8rem_1fr] items-center gap-4">
        <label for="genre" class="text-sm font-medium">ジャンル</label>
        <select id="genre" name="genre"
          class="w-40 rounded border border-gray-400 bg-white px-3 py-2 text-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200">
          <option value="" selected disabled>選択してください</option>
          <option value="general">一般常識</option>
          <option value="history">歴史</option>
          <option value="science">科学</option>
          <option value="sports">スポーツ</option>
        </select>
      </div>
      <!-- クイズユニットタイトル -->
      <div class="grid grid-cols-[8rem_1fr] items-center gap-4">
        <label for="unit-title" class="text-sm font-medium">クイズユニットタイトル</label>
        <input id="unit-title" name="title" type="text"
          class="w-full max-w-md rounded border border-gray-400 bg-white px-3 py-2 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200" />
      </div>
      <!-- 説明 -->
      <div class="grid grid-cols-[8rem_1fr] items-start gap-4">
        <label for="description" class="pt-2 text-sm font-medium">説明</label>
        <textarea id="description" name="description" rows="5"
          class="w-full rounded border border-gray-400 bg-white px-3 py-2 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200"></textarea>
      </div>
      <div class="grid grid-cols-[8rem_1fr] items-start gap-4">
          <label for="q1-question" class="pt-2 text-sm font-medium">問題1</label>
          <textarea id="q1-question" name="questions[0][question]" rows="5"
            class="w-full rounded border border-gray-400 bg-white px-3 py-2 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200"></textarea>
      </div>
      <div class="space-y-4 pl-25">
        <div class="flex items-center gap-6">
          <input type="radio" name="questions[0][answer]" value="1" class="h-5 w-5 accent-blue-600" />
          <input type="text" name="questions[0][choices][]" placeholder="選択肢1"
              class="w-56 rounded border border-gray-400 bg-white px-3 py-2 text-center text-sm focus:border-blue-500" />
        </div>
        <div class="flex items-center gap-6">
          <input type="radio" name="questions[0][answer]" value="1" class="h-5 w-5 accent-blue-600" />
          <input type="text" name="questions[0][choices][]" placeholder="選択肢2"
              class="w-56 rounded border border-gray-400 bg-white px-3 py-2 text-center text-sm focus:border-blue-500" />
        </div>
        <div class="flex items-center gap-6">
          <input type="radio" name="questions[0][answer]" value="1" class="h-5 w-5 accent-blue-600" />
          <input type="text" name="questions[0][choices][]" placeholder="選択肢3"
              class="w-56 rounded border border-gray-400 bg-white px-3 py-2 text-center text-sm focus:border-blue-500" />
        </div>
        <div class="flex items-center gap-6">
          <input type="radio" name="questions[0][answer]" value="1" class="h-5 w-5 accent-blue-600" />
          <input type="text" name="questions[0][choices][]" placeholder="選択肢4"
              class="w-56 rounded border border-gray-400 bg-white px-3 py-2 text-center text-sm focus:border-blue-500" />
        </div>
      </div>
      <div class="grid grid-cols-[8rem_1fr] items-start gap-4">
        <label for="q1-explanation" class="pt-2 text-sm font-medium">解説</label>
        <textarea id="q1-explanation" name="questions[0][explanation]" rows="5"
          class="w-full rounded border border-gray-400 bg-white px-3 py-2 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200"></textarea>
      </div>
      <div class="grid grid-cols-[8rem_1fr] items-start gap-4">
          <label for="q2-question" class="pt-2 text-sm font-medium">問題2</label>
          <textarea id="q2-question" name="questions[1][question]" rows="5"
            class="w-full rounded border border-gray-400 bg-white px-3 py-2 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200"></textarea>
      </div>
      <div class="space-y-4 pl-25">
        <div class="flex items-center gap-6">
          <input type="radio" name="questions[1][answer]" value="1" class="h-5 w-5 accent-blue-600" />
          <input type="text" name="questions[1][choices][]" placeholder="選択肢1"
              class="w-56 rounded border border-gray-400 bg-white px-3 py-2 text-center text-sm focus:border-blue-500" />
        </div>
        <div class="flex items-center gap-6">
          <input type="radio" name="questions[1][answer]" value="1" class="h-5 w-5 accent-blue-600" />
          <input type="text" name="questions[1][choices][]" placeholder="選択肢2"
              class="w-56 rounded border border-gray-400 bg-white px-3 py-2 text-center text-sm focus:border-blue-500" />
        </div>
        <div class="flex items-center gap-6">
          <input type="radio" name="questions[1][answer]" value="1" class="h-5 w-5 accent-blue-600" />
          <input type="text" name="questions[1][choices][]" placeholder="選択肢3"
              class="w-56 rounded border border-gray-400 bg-white px-3 py-2 text-center text-sm focus:border-blue-500" />
        </div>
        <div class="flex items-center gap-6">
          <input type="radio" name="questions[1][answer]" value="1" class="h-5 w-5 accent-blue-600" />
          <input type="text" name="questions[1][choices][]" placeholder="選択肢4"
              class="w-56 rounded border border-gray-400 bg-white px-3 py-2 text-center text-sm focus:border-blue-500" />
        </div>
      </div>
      <div class="grid grid-cols-[8rem_1fr] items-start gap-4">
        <label for="q2-explanation" class="pt-2 text-sm font-medium">解説</label>
        <textarea id="q2-explanation" name="questions[1][explanation]" rows="5"
          class="w-full rounded border border-gray-400 bg-white px-3 py-2 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200"></textarea>
      </div>
      <div class="flex justify-center">
        <button class="rounded bg-blue-600 px-6 py-2 text-sm font-medium text-white hover:bg-blue-700">更新</button>
      </div>
    </form>
</x-layout>
