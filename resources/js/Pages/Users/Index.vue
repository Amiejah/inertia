<template>

        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Name
              </th>

              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <tr v-for="user in users" :key="user.id">
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                  </div>
                  <div class="ml-4">
                    <inertia-link :href="$route('users.edit', user.id)">
                        <div class="text-sm font-medium text-gray-900" v-html="user.name"></div>
                        <div class="text-sm text-gray-500" v-html="user.email"></div>
                    </inertia-link>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <inertia-link class="text-indigo-600 hover:text-indigo-900" :href="$route('users.edit', user.id)">Edit</inertia-link>
              </td>
            </tr>
          </tbody>
          <tfoot>
              <tr>
                  <td colspan="2">
                      <inertia-link href="create">Create an user</inertia-link>
                  </td>
              </tr>
          </tfoot>
        </table>

</template>


<script>
export default {
    props: ['users'],
    name: 'Users'
}
</script>
