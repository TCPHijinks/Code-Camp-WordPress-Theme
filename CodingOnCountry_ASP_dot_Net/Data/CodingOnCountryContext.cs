using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;

namespace CodingOnCountry.Models
{
    public class CodingOnCountryContext : DbContext
    {
        public CodingOnCountryContext (DbContextOptions<CodingOnCountryContext> options)
            : base(options)
        {
        }

        public DbSet<CodingOnCountry.Models.Camp> Camp { get; set; }
    }
}
