document.addEventListener('DOMContentLoaded', () => {
  const mainContent = document.getElementById('main-content');

  // Sidebar navigation items
  const navItems = {
      'expenses-nav': 'Manage your Expenses',
      'budget-nav': 'Manage Your Budget',
      'categories-nav': 'Manage Your Categories',
      'profile-nav': 'Your Profile',
  };

  // Highlight the active nav item
  const highlightNav = (id) => {
      document.querySelectorAll('nav ul li').forEach((li) => {
          li.classList.remove('bg-blue-500', 'font-bold');
          li.classList.add('bg-blue-700');
      });
      const selectedNav = document.getElementById(id);
      selectedNav.classList.add('bg-blue-500', 'font-bold');
      selectedNav.classList.remove('bg-blue-700');
  };

  // Add click event listeners to each nav item
  Object.keys(navItems).forEach((id) => {
      document.getElementById(id).addEventListener('click', () => {
          // Highlight selected nav item
          highlightNav(id);

          // Load content dynamically
          mainContent.innerHTML = `
              <div class="bg-white shadow-lg rounded-xl p-8">
                  <h1 class="text-3xl font-bold text-blue-800">${navItems[id]}</h1>
                  <p class="mt-4 text-gray-700 text-lg">Contents of ${navItems[id]}.</p>
              </div>
          `;
      });
  });

  // Handle Logout
  document.getElementById('logout-nav').addEventListener('click', () => {
      if (confirm('Are you sure you want to log out?')) {
          window.location.href = 'logout.php'; // Redirect to logout handler
      }
  });

  // Default: Highlight Expenses and load content
  document.getElementById('expenses-nav').click();
});
