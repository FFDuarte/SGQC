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
						
						<td class="border-dashed border-t border-gray-200 userId">
							<span class="text-gray-700 px-6 py-3 flex items-center" x-text="user.userId"></span>
						</td>
						<td class="border-dashed border-t border-gray-200 firstName">
							<span class="text-gray-700 px-6 py-3 flex items-center" x-text="user.firstName"></span>
						</td>
						<td class="border-dashed border-t border-gray-200 lastName">
							<span class="text-gray-700 px-6 py-3 flex items-center" x-text="user.lastName"></span>
						</td>
						<td class="border-dashed border-t border-gray-200 emailAddress">
							<span class="text-gray-700 px-6 py-3 flex items-center"
								x-text="user.emailAddress"></span>
						</td>
						<td class="border-dashed border-t border-gray-200 gender">
							<span class="text-gray-700 px-6 py-3 flex items-center"
								x-text="user.gender"></span>
						</td>
						<td class="border-dashed border-t border-gray-200 phoneNumber">
							<span class="text-gray-700 px-6 py-3 flex items-center"
								x-text="user.phoneNumber"></span>
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
					'key': 'userId',
					'value': ' ID'
				},
				{
					'key': 'firstName',
					'value': 'placa'
				},
				{
					'key': 'lastName',
					'value': 'KM'
				},
				{
					'key': 'emailAddress',
					'value': '}n'
				},
				{
					'key': 'gender',
					'value': 'Gender'
				},
				{
					'key': 'phoneNumber',
					'value': 'Phone'
				}
			],
			users: [{
				"userId": 1,
				"firstName": "Cort",
				"lastName": "Tosh",
				"emailAddress": "ctosh0@github.com",
				"gender": "Male",
				"phoneNumber": "327-626-5542"
			}, {
				"userId": 2,
				"firstName": "Brianne",
				"lastName": "Dzeniskevich",
				"emailAddress": "bdzeniskevich1@hostgator.com",
				"gender": "Female",
				"phoneNumber": "144-190-8956"
			}, {
				"userId": 3,
				"firstName": "Isadore",
				"lastName": "Botler",
				"emailAddress": "ibotler2@gmpg.org",
				"gender": "Male",
				"phoneNumber": "350-937-0792"
			}, {
				"userId": 4,
				"firstName": "Janaya",
				"lastName": "Klosges",
				"emailAddress": "jklosges3@amazon.de",
				"gender": "Female",
				"phoneNumber": "502-438-7799"
			}, {
				"userId": 5,
				"firstName": "Freddi",
				"lastName": "Di Claudio",
				"emailAddress": "fdiclaudio4@phoca.cz",
				"gender": "Female",
				"phoneNumber": "265-448-9627"
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