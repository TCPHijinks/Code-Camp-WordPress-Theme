using System;
using System.Collections.Generic;
using System.Linq;
using System.Text.Encodings.Web;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;

namespace CodingOnCountry.Controllers
{
    public class TestController : Controller
    {
        // Use with: https://localhost:{port}/test/Welcome?name=Rick&numtimes=4 // **UPDATE PORT NUM
        // Get /Test/ view
        public IActionResult Index()
        {
            return View();
        }

        // Render response using given url params, then return to view.
        public IActionResult Welcome(string name, int numTimes = 1)
        {
            ViewData["Message"] = "Hello " + name;
            ViewData["NumTimes"] = numTimes;

            return View();
        }
    }
}