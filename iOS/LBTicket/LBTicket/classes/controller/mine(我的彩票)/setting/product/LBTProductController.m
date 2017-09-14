//
//  LBTProductController.m
//  LBTicket
//
//  Created by yunmei on 2017/9/14.
//  Copyright © 2017年 liubo. All rights reserved.
//

#import "LBTProductController.h"

@interface LBTProductController ()

@end

@implementation LBTProductController

- (void)viewDidLoad {
    [super viewDidLoad];
    // Do any additional setup after loading the view.
}

- (id)init
{
    UICollectionViewFlowLayout *flow = [[UICollectionViewFlowLayout alloc] init];
    
    // 设置每一个各自的大小
    flow.itemSize = CGSizeMake(80, 80);
    
    // 水平方向上的间距 == 0
    flow.minimumInteritemSpacing = 0;
    
    // 垂直方向上的间距 ==
    //    flow.minimumLineSpacing = 40;
    
    flow.sectionInset = UIEdgeInsetsMake(20, 0, 0, 0);
    
    return [self initWithCollectionViewLayout:flow];
}

- (void)viewDidLoad
{
    [super viewDidLoad];
    
    self.title = @"其他产品推荐";
    
    // 1.加载JSON
    NSArray *array = ILJson(product.json);
    
    // 2.创建产品模型
    _products = [NSMutableArray array];
    for (NSDictionary *dict in array) {
        ILProduct *p = [ILProduct productWithDict:dict];
        [_products addObject:p];
    }
    
    // 3.注册
    UINib *nib = [UINib nibWithNibName:[ILProductCell xib] bundle:nil];
    [self.collectionView registerNib:nib forCellWithReuseIdentifier:ILId];
    self.collectionView.backgroundColor = ILGlobalBg;
}

#pragma mark - 数据源方法
- (NSInteger)collectionView:(UICollectionView *)collectionView numberOfItemsInSection:(NSInteger)section
{
    
    return _products.count;
}

- (UICollectionViewCell *)collectionView:(UICollectionView *)collectionView cellForItemAtIndexPath:(NSIndexPath *)indexPath
{
    ILProductCell *cell = [collectionView dequeueReusableCellWithReuseIdentifier:ILId forIndexPath:indexPath];
    
    cell.product = _products[indexPath.item];
    
    return cell;
}

@end
