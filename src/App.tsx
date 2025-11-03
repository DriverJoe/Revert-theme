import { Toaster } from "@/components/ui/toaster";
import { Toaster as Sonner } from "@/components/ui/sonner";
import { TooltipProvider } from "@/components/ui/tooltip";
import { QueryClient, QueryClientProvider } from "@tanstack/react-query";
import { BrowserRouter, Routes, Route } from "react-router-dom";
import Index from "./pages/Index";
import NotFound from "./pages/NotFound";
import CropSolutions from "./pages/products/CropSolutions";
import Horticulture from "./pages/products/Horticulture";
import Livestock from "./pages/products/Livestock";
import PestManagement from "./pages/products/PestManagement";
import Distributor from "./pages/Distributor";
import Sustainability from "./pages/Sustainability";
import CommunityPrograms from "./pages/CommunityPrograms";
import CaseStudies from "./pages/research/CaseStudies";
import Innovation from "./pages/research/Innovation";
import TechnicalSheets from "./pages/TechnicalSheets";
import About from "./pages/About";
import Contact from "./pages/Contact";

const queryClient = new QueryClient();

const App = () => (
  <QueryClientProvider client={queryClient}>
    <TooltipProvider>
      <Toaster />
      <Sonner />
      <BrowserRouter>
        <Routes>
          <Route path="/" element={<Index />} />
          <Route path="/products/crop-solutions" element={<CropSolutions />} />
          <Route path="/products/horticulture" element={<Horticulture />} />
          <Route path="/products/livestock" element={<Livestock />} />
          <Route path="/products/pest-management" element={<PestManagement />} />
          <Route path="/distributor" element={<Distributor />} />
          <Route path="/sustainability" element={<Sustainability />} />
          <Route path="/sustainability/community" element={<CommunityPrograms />} />
          <Route path="/research/case-studies" element={<CaseStudies />} />
          <Route path="/research/innovation" element={<Innovation />} />
          <Route path="/technical-sheets" element={<TechnicalSheets />} />
          <Route path="/about" element={<About />} />
          <Route path="/contact" element={<Contact />} />
          {/* ADD ALL CUSTOM ROUTES ABOVE THE CATCH-ALL "*" ROUTE */}
          <Route path="*" element={<NotFound />} />
        </Routes>
      </BrowserRouter>
    </TooltipProvider>
  </QueryClientProvider>
);

export default App;
