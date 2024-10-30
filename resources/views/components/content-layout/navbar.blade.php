<nav class="bg-white text-orange-500">
    <div class="container mx-auto px-4 md:flex items-center gap-6">
      <!-- Logo -->
      <div class="flex items-center justify-between md:w-auto w-full">
        <!-- Mobile Menu Button -->
        <div class="md:hidden flex items-center">
          <button class="mobile-menu-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <title>bars-3-bottom-left</title>
              <g fill="none">
                <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </g>
            </svg>
          </button>
        </div>
      </div>
      <!-- Primary Navigation -->
      <div class="hidden md:flex md:flex-row flex-col items-center justify-start md:space-x-1 navigation-menu pb-3 md:pb-0 navigation-menu">
        <a href="{{ route('views.store') }}?page={{ 'home' }}" class="block py-2 px-3 hover:bg-gray-700 hover:text-white rounded">Home</a>
        <div class="relative">
          <button class="dropdown-toggle py-2 px-3 hover:bg-gray-700 hover:text-white flex items-center gap-2 rounded">
            <span class="pointer-events-none">ระบบ ฐานลูกค้า</span>
            <svg class="w-3 h-3 pointer-events-none" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <title>chevron-down</title>
              <g fill="none">
                <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </g>
            </svg>
          </button>
          <div class="dropdown-menu absolute hidden bg-white text-orange-500 drop-shadow-md px-2 pt-3 rounded-lg pb-2 w-48">
            <a href="{{ route('views.store') }}?page={{ 'create-customer' }}" class="block px-6 rounded-md py-1 hover:bg-gray-600 hover:text-white">เพิ่มข้อมูลลูกค้า</a>
            <a href="{{ route('views.store') }}?page={{ 'customers' }}" class="block px-6 rounded-md py-1 hover:bg-gray-600 hover:text-white">ข้อมูลลูกค้า</a>
          </div>
        </div>
        <a href="#" class="block py-2 px-3 hover:bg-gray-700 hover:text-white rounded">About</a>
        <!-- Dropdown Menu -->
        <div class="relative">
          <button class="dropdown-toggle py-2 px-3 hover:bg-gray-700 hover:text-white flex items-center gap-2 rounded">
            <span class="pointer-events-none">Services</span>
            <svg class="w-3 h-3 pointer-events-none" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <title>chevron-down</title>
              <g fill="none">
                <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </g>
            </svg>
          </button>
          <div class="dropdown-menu absolute hidden bg-white text-orange-500 rounded-b-lg pb-2 w-48">
            <a href="#" class="block px-6 py-1 hover:bg-gray-600">Web Design</a>
            <a href="#" class="block px-6 py-1 hover:bg-gray-600">Development</a>
            <a href="#" class="block px-6 py-1 hover:bg-gray-600">SEO</a>
          </div>
        </div>
        <a href="#" class="py-4 px-3 block">Contact</a>
      </div>
    </div>
  </nav>

  <script>
    const mobileMenuButton = document.querySelector(".mobile-menu-button")
    const mobileMenu = document.querySelector(".navigation-menu")

    mobileMenuButton.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden")
    })
    document.addEventListener("DOMContentLoaded", () => {
        // Select all dropdown toggle buttons
        const dropdownToggles = document.querySelectorAll(".dropdown-toggle")

        dropdownToggles.forEach((toggle) => {
            toggle.addEventListener("click", () => {
            // Find the next sibling element which is the dropdown menu
            const dropdownMenu = toggle.nextElementSibling

            // Toggle the 'hidden' class to show or hide the dropdown menu
            if (dropdownMenu.classList.contains("hidden")) {
                // Hide any open dropdown menus before showing the new one
                document.querySelectorAll(".dropdown-menu").forEach((menu) => {
                menu.classList.add("hidden")
                })

                dropdownMenu.classList.remove("hidden")
            } else {
                dropdownMenu.classList.add("hidden")
            }
            })
        })

        // Optional: Clicking outside of an open dropdown menu closes it
        window.addEventListener("click", (event) => {
            if (!event.target.matches(".dropdown-toggle")) {
            document.querySelectorAll(".dropdown-menu").forEach((menu) => {
                if (!menu.contains(event.target)) {
                menu.classList.add("hidden")
                }
            })
            }
        })
    })
  </script>