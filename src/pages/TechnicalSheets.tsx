import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";
import { Badge } from "@/components/ui/badge";
import Navbar from "@/components/Navbar";
import Footer from "@/components/Footer";
import { FileText, Download, Search } from "lucide-react";

const TechnicalSheets = () => {
  const documents = [
    {
      category: "Crop Solutions",
      title: "Nitrogen Optimization Guide",
      description: "Complete guide to nitrogen management for maximum crop efficiency",
      pages: "24 pages",
      fileSize: "2.3 MB",
    },
    {
      category: "Crop Solutions",
      title: "Soil Health Assessment Protocol",
      description: "Step-by-step procedures for comprehensive soil analysis",
      pages: "16 pages",
      fileSize: "1.8 MB",
    },
    {
      category: "Horticulture",
      title: "Greenhouse Management Best Practices",
      description: "Optimizing environmental controls for horticultural production",
      pages: "32 pages",
      fileSize: "3.1 MB",
    },
    {
      category: "Horticulture",
      title: "Fruit Quality Enhancement",
      description: "Techniques for improving color, size, and shelf life",
      pages: "20 pages",
      fileSize: "2.5 MB",
    },
    {
      category: "Livestock",
      title: "Herd Health Monitoring",
      description: "Comprehensive livestock health management protocols",
      pages: "28 pages",
      fileSize: "2.7 MB",
    },
    {
      category: "Livestock",
      title: "Nutrition Requirements by Life Stage",
      description: "Detailed nutritional guidelines for optimal livestock performance",
      pages: "36 pages",
      fileSize: "3.4 MB",
    },
    {
      category: "Pest Management",
      title: "IPM Implementation Guide",
      description: "Integrated pest management strategies and protocols",
      pages: "40 pages",
      fileSize: "4.2 MB",
    },
    {
      category: "Pest Management",
      title: "Biological Control Agents Handbook",
      description: "Complete reference for beneficial organisms and their application",
      pages: "44 pages",
      fileSize: "4.8 MB",
    },
    {
      category: "MSDS",
      title: "Safety Data Sheets - Complete Collection",
      description: "All product safety information and handling procedures",
      pages: "120+ pages",
      fileSize: "8.5 MB",
    },
  ];

  return (
    <div className="min-h-screen flex flex-col">
      <Navbar />
      
      <section className="py-16 bg-muted">
        <div className="container">
          <div className="max-w-3xl mx-auto text-center mb-12">
            <h1 className="text-4xl md:text-5xl font-bold mb-4">Technical Sheets & MSDS</h1>
            <p className="text-xl text-muted-foreground">
              Access comprehensive technical documentation and safety information
            </p>
          </div>

          <div className="max-w-2xl mx-auto mb-12">
            <Card>
              <CardContent className="pt-6">
                <div className="flex gap-2">
                  <div className="relative flex-1">
                    <Search className="absolute left-3 top-3 h-4 w-4 text-muted-foreground" />
                    <Input placeholder="Search documents..." className="pl-9" />
                  </div>
                  <Button>Search</Button>
                </div>
              </CardContent>
            </Card>
          </div>

          <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            {documents.map((doc, index) => (
              <Card key={index} className="hover:shadow-lg transition-shadow">
                <CardHeader>
                  <div className="flex items-start justify-between mb-2">
                    <Badge variant="secondary">{doc.category}</Badge>
                    <FileText className="h-5 w-5 text-muted-foreground" />
                  </div>
                  <CardTitle className="text-lg">{doc.title}</CardTitle>
                  <CardDescription>{doc.description}</CardDescription>
                </CardHeader>
                <CardContent>
                  <div className="flex items-center justify-between text-sm text-muted-foreground mb-4">
                    <span>{doc.pages}</span>
                    <span>{doc.fileSize}</span>
                  </div>
                  <Button variant="outline" className="w-full">
                    <Download className="h-4 w-4 mr-2" />
                    Download PDF
                  </Button>
                </CardContent>
              </Card>
            ))}
          </div>

          <div className="mt-12 text-center">
            <Card className="max-w-2xl mx-auto">
              <CardHeader>
                <CardTitle>Need Additional Technical Support?</CardTitle>
                <CardDescription>
                  Our technical team is available to provide detailed product information and application guidance
                </CardDescription>
              </CardHeader>
              <CardContent>
                <Button size="lg" asChild>
                  <a href="/contact">Contact Technical Support</a>
                </Button>
              </CardContent>
            </Card>
          </div>
        </div>
      </section>

      <Footer />
    </div>
  );
};

export default TechnicalSheets;
