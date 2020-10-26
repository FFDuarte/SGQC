
	<div class="container mx-auto py-6 px-10" x-data="datatables()" x-cloak>
    
    

	<div class="mb-4 flex justify-between items-center">
		<div class="flex-1 pr-4">
			<div class="relative md:w-1/3">
				<input type="search"class="w-full pl-10 pr-4 py-2 rounded-lg shadow focus:outline-none focus:shadow-outline text-gray-600 font-medium" placeholder="Search...">
				<div class="absolute top-0 left-0 inline-flex items-center p-2">
					<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" viewBox="0 0 24 24"
						stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
						stroke-linejoin="round">
						<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
						<circle cx="10" cy="10" r="7" />
						<line x1="21" y1="21" x2="15" y2="15" />
					</svg>
				</div>
			</div>
		</div>
		
		<div>
			<div class="shadow rounded-lg flex">
				<div class="relative">
					<button @click.prevent="open = !open"
						class="rounded-lg inline-flex items-center bg-white hover:text-blue-500 focus:outline-none focus:shadow-outline text-gray-500 font-semibold py-2 px-2 md:px-4">
						<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:hidden" viewBox="0 0 24 24"
							stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
							stroke-linejoin="round">
							<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
							<path
								d="M5.5 5h13a1 1 0 0 1 0.5 1.5L14 12L14 19L10 16L10 12L5 6.5a1 1 0 0 1 0.5 -1.5" />
						</svg>
						<span class="hidden md:block">Display</span>
						<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" width="24" height="24"
							viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
							stroke-linecap="round" stroke-linejoin="round">
							<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
							<polyline points="6 9 12 15 18 9" />
						</svg>
					</button>

					<div x-show="open" @click.away="open = false"
						class="z-40 absolute top-0 right-0 w-40 bg-white rounded-lg shadow-lg mt-12 -mr-1 block py-1 overflow-hidden">
						<template x-for="heading in headings">
							<label
								class="flex justify-start items-center text-truncate hover:bg-gray-100 px-4 py-2">
								<div class="text-teal-600 mr-3">
									<input type="checkbox" class="form-checkbox focus:outline-none focus:shadow-outline" checked @click="toggleColumn(heading.key)">
								</div>
								<div class="select-none text-gray-700" x-text="heading.value"></div>
							</label>
						</template>
					</div>
				</div>
			</div>
		</div>
		
	</div>

	<div class="overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative"
		style="height: 405px;">
		<table class="border-collapse table-auto w-full whitespace-no-wrap bg-white table-striped relative">
			<thead>
				<tr class="text-left">
					
					<template x-for="heading in headings">
						<th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs"
							x-text="heading.value" :x-ref="heading.key" :class="{ [heading.key]: true }"></th>
					</template>
				</tr>
			</thead>
			<tbody>
				<template x-for="user in users" :key="user.userId">
					<tr>
						
						<td class="border-dashed border-t border-gray-200 id">
							<span class="text-gray-700 px-6 py-3 flex items-center" x-text="user.id"></span>
						</td>
						<td class="border-dashed border-t border-gray-200 placa">
							<span class="text-gray-700 px-6 py-3 flex items-center" x-text="user.placa"></span>
						</td>
						<td class="border-dashed border-t border-gray-200 km">
							<span class="text-gray-700 px-6 py-3 flex items-center" x-text="user.km"></span>
						</td>
						<td class="border-dashed border-t border-gray-200 numerorota">
							<span class="text-gray-700 px-6 py-3 flex items-center"x-text="user.numerorota"></span>
						</td>
						<td class="border-dashed border-t border-gray-200 nomerota">
							<span class="text-gray-700 px-6 py-3 flex items-center" x-text="user.nomerota"></span>
						</td>
						<td class="border-dashed border-t border-gray-200 motorista">
							<span class="text-gray-700 px-6 py-3 flex items-center"x-text="user.motorista"></span>
						</td>
					</tr>
				</template>
			</tbody>
		</table>
	</div>
</div>

<script>
	function datatables() {
		return {
			headings: [
				{
					'key': 'id',
					'value': ' ID'
				},
				{
					'key': 'placa',
					'value': 'placa'
				},
				{
					'key': 'km',
					'value': 'KM'
				},
				{
					'key': 'numerorota',
					'value': 'Nº Rota'
				},
				{
					'key': 'nomerota',
					'value': 'Nome Rota'
				},
				{
					'key': 'motorista',
					'value': 'Motorista'
				}
			],
			users: [{
				"id": 1,
				"placa": "jjj8888",
				"km": "Tosh",
				"numerorota": "ctosh0@github.com",
				"nomerota": "Male",
				"motorista": "327-626-5542"
			}, {
				"id": 1,
				"placa": "jjj8888",
				"km": "Tosh",
				"numerorota": "ctosh0@github.com",
				"nomerota": "Male",
				"motorista": "327-626-5542"
			}, {
				"id": 1,
				"placa": "jjj8888",
				"km": "Tosh",
				"numerorota": "ctosh0@github.com",
				"nomerota": "Male",
				"motorista": "327-626-5542"
			}, {
				"id": 1,
				"placa": "jjj8888",
				"km": "Tosh",
				"numerorota": "ctosh0@github.com",
				"nomerota": "Male",
				"motorista": "327-626-5542"
			}, {
				"id": 1,
				"placa": "jjj8888",
				"km": "Tosh",
				"numerorota": "ctosh0@github.com",
				"nomerota": "Male",
				"motorista": "327-626-5542"
			}],
			selectedRows: [],

			open: false,
			
			toggleColumn(key) {
				// Note: All td must have the same class name as the headings key! 
				let columns = document.querySelectorAll('.' + key);

				if (this.$refs[key].classList.contains('hidden') && this.$refs[key].classList.contains(key)) {
					columns.forEach(column => {
						column.classList.remove('hidden');
					});
				} else {
					columns.forEach(column => {
						column.classList.add('hidden');
					});
				}
			},

			getRowDetail($event, id) {
				let rows = this.selectedRows;

				if (rows.includes(id)) {
					let index = rows.indexOf(id);
					rows.splice(index, 1);
				} else {
					rows.push(id);
				}
			},

			selectAllCheckbox($event) {
				let columns = document.querySelectorAll('.rowCheckbox');

				this.selectedRows = [];

				if ($event.target.checked == true) {
					columns.forEach(column => {
						column.checked = true
						this.selectedRows.push(parseInt(column.name))
					});
				} else {
					columns.forEach(column => {
						column.checked = false
					});
					this.selectedRows = [];
				}
			}
		}
	}
</script>
</div>