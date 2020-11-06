<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

            <?php
			   include "../template/menu/menuTransporte.php"
			?>
      
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
		
		
			<div class="shadow rounded-lg flex">
					<button class="rounded-lg inline-flex items-center bg-white hover:text-blue-500 focus:outline-none focus:shadow-outline text-gray-500 font-semibold py-2 px-2 md:px-4">			
					Cadastrar
					</button>
			</div>

	</div>

	<div class="overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative"
		style="height: 500px;">
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
						<td class="border-dashed border-t border-gray-200 numerorota">
							<span class="text-gray-700 px-6 py-3 flex items-center" x-text="user.numerorota"></span>
						</td>
						<td class="border-dashed border-t border-gray-200 nomerota">
							<span class="text-gray-700 px-6 py-3 flex items-center" x-text="user.nomerota"></span>
						</td>
						<td class="border-dashed border-t border-gray-200 km">
							<span class="text-gray-700 px-6 py-3 flex items-center"x-text="user.km"></span>
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
					'key': 'numerorota',
					'value': 'Nº'
				},
				{
					'key': 'nomerota',
					'value': 'nomerota'
				},
				{
					'key': 'km',
					'value': 'km'
				}
			],
			users: [{
				"id": 1,
				"numerorota": "024",
				"nomerota": "Miguel Colto",
				"km": "24.24"
			}, {
				"id": 1,
				"numerorota": "666",
				"nomerota": "Posse",
				"km": "10.00"
			}, {
				"id": 3,
				"numerorota": "005",
				"nomerota": "cort",
				"km": "38.5"
			}, {
				"id": 4,
				"numerorota": "369",
				"nomerota": "arma",
				"km": "12.54"
			}, {
				"id": 5,
				"numerorota": "250",
				"nomerota": "Tosh",
				"km": "25.5"
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