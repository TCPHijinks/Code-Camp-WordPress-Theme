using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.Rendering;
using Microsoft.EntityFrameworkCore;
using CodingOnCountry.Models;
using System.Diagnostics;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Hosting;
using System.IO;

namespace CodingOnCountry.Controllers
{
    public class HomeController : Controller
    {
        private readonly CodingOnCountryContext _context;
        public HomeController(CodingOnCountryContext context)
        {          
            _context = context;         
        }

       

        // GET: Camps
        public async Task<IActionResult> Index()
        {
            return View(await _context.Camp.ToListAsync());
        }

        public IActionResult Privacy()
        {
            return View();
        }

        [ResponseCache(Duration = 0, Location = ResponseCacheLocation.None, NoStore = true)]
        public IActionResult Error()
        {
            return View(new ErrorViewModel { RequestId = Activity.Current?.Id ?? HttpContext.TraceIdentifier });
        }
    }
}
